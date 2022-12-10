<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QaTopicCreateRequest;
use App\Http\Requests\QaTopicReplyRequest;
use App\Models\QaTopic;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class MessengerController extends Controller
{
    

    public function index()
    {
        $topics = QaTopic::where(function ($query) {
            $query
                ->where('creator_id', Auth::id())
                ->orWhere('receiver_id', Auth::id());
        })  
            ->orderBy('created_at', 'DESC')
            ->get();

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Semua Pesan' ;
        $heading_class = 'fal fa-envelope';
        $title   = trans('global.all_messages');
        $unreads = $this->unreadTopics();

        return view('admin.messenger.index', compact('topics', 'title', 'unreads', 'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function createTopic()
    {
        $users = User::with('data_user')
            ->get()->except(Auth::id());
        
        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Pesan baru' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();
        return view('admin.messenger.create', compact('users', 'unreads',  'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function storeTopic(QaTopicCreateRequest $request)
    {
        $topic = QaTopic::create([
            'subject'     => $request->input('subject'),
            'creator_id'  => Auth::id(),
            'receiver_id' => $request->input('recipient'),
        ]);

        $topic->messages()->create([
            'sender_id' => Auth::id(),
            'content'   => $request->input('content'),
        ]);

        return redirect()->route('admin.messenger.index');
    }

    public function showMessages(QaTopic $topic)
    {
        $this->checkAccessRights($topic);

        foreach ($topic->messages as $message) {
            if ($message->sender_id !== Auth::id() && $message->read_at === null) {
                $message->read_at = Carbon::now();
                $message->save();
            }
        }

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Isi pesan' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();

        return view('admin.messenger.show', compact('topic', 'unreads',  'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function destroyTopic(QaTopic $topic)
    {
        $this->checkAccessRights($topic);

        $topic->delete();

        return redirect()->route('admin.messenger.index');
    }

    public function showInbox()
    {
        $title = trans('global.inbox');

        $topics = QaTopic::where('receiver_id', Auth::id())
            ->orderBy('created_at', 'DESC')
            ->get();

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Kotak masuk' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();

        return view('admin.messenger.index', compact('topics', 'title', 'unreads', 'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function showOutbox()
    {
        $title = trans('global.outbox');

        $topics = QaTopic::where('creator_id', Auth::id())
            ->orderBy('created_at', 'DESC')
            ->get();

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Kotak keluar' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();

        return view('admin.messenger.index', compact('topics', 'title', 'unreads', 'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function showTrash()
    {
        $title = trans('global.outbox');

        $topics = QaTopic::where('receiver_id', Auth::id())
            ->with('messages')
            ->orderBy('created_at', 'DESC')
            ->get();

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Kotak sampah' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();

        return view('admin.messenger.index', compact('topics', 'title', 'unreads', 'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function replyToTopic(QaTopicReplyRequest $request, QaTopic $topic)
    {
        $this->checkAccessRights($topic);

        $topic->messages()->create([
            'sender_id' => Auth::id(),
            'content'   => $request->input('content'),
        ]);

        return redirect()->route('admin.messenger.index');
    }

    public function showReply(QaTopic $topic)
    {
        $this->checkAccessRights($topic);

        $receiverOrCreator = $topic->receiverOrCreator();

        if ($receiverOrCreator === null || $receiverOrCreator->trashed()) {
            abort(404);
        }

        $module_name = 'Messenger' ;
        $page_title = 'Pesan';
        $page_heading = 'Pesan' ;
        $heading_class = 'fal fa-envelope';
        $unreads = $this->unreadTopics();

        return view('admin.messenger.reply', compact('topic', 'unreads', 'module_name', 'page_title', 'page_heading', 'heading_class'));
    }

    public function unreadTopics(): array
    {
        $topics = QaTopic::where(function ($query) {
            $query
                ->where('creator_id', Auth::id())
                ->orWhere('receiver_id', Auth::id());
        })
            ->with('messages')
            ->orderBy('created_at', 'DESC')
            ->get();

        $inboxUnreadCount  = 0;
        $outboxUnreadCount = 0;

        foreach ($topics as $topic) {
            foreach ($topic->messages as $message) {
                if (
                    $message->sender_id !== Auth::id()
                    && $message->read_at === null
                ) {
                    if ($topic->creator_id !== Auth::id()) {
                        ++$inboxUnreadCount;
                    } else {
                        ++$outboxUnreadCount;
                    }
                }
            }
        }

        return [
            'inbox'  => $inboxUnreadCount,
            'outbox' => $outboxUnreadCount,
        ];
    }

    private function checkAccessRights(QaTopic $topic)
    {
        $user = Auth::user();

        if ($topic->creator_id !== $user->id && $topic->receiver_id !== $user->id) {
            return abort(401);
        }
    }
}
