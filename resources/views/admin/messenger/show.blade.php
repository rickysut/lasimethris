@extends('admin.messenger.template')


{{-- @section('title', $topic->subject) --}}

@section('messenger-content')
<div class="row">
    <p>
        @if($topic->receiverOrCreator() !== null && !$topic->receiverOrCreator()->trashed())
            <a href="{{ route('admin.messenger.reply', $topic) }}" class="btn btn-primary">
                {{ trans('global.reply') }}
            </a>
        @endif
    </p>
    <div class="col-lg-12">
        <div class="list-group">
            @foreach($topic->messages as $message)
                @if ($message != null)
                <div class="row list-group-item">
                    <div class="row">
                        <div class="col col-lg-10">
                            @if ($message->sender != null)
                            <strong>{{ ($message->sender->name ?? '') }} ( {{ ($message->sender->data_user->company_name ?? '')}} )</strong>
                            @endif
                        </div>
                        <div class="col col-lg-2">
                            @if ($message->created_at != null)
                            {{ ($message->created_at->diffForHumans() ?? '') }}
                            @endif
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12">
                            @if ($message->content != null)
                            {{ ($message->content ?? '') }}
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')

@parent
<script>
    $(document).ready(function() {
        $.ajax({
            data: {
                "_token": "{{ csrf_token() }}"
            },
            url: "/admin/messenger/"+{{ $topic->id }}+"/update",
            type: "post",
            success: function (response) {
                //console.log(response);
            },
        });
        
    });
</script>

@endsection