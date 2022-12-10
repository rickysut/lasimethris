@extends('admin.messenger.template')

{{-- @section('title', $title) --}}
@section ('style')
<style>
    .unread {
        background: #e9ecef;
        font-weight: 900 !important;
    }

    .read {
        color: #92969c;
    }

    .trashed {
        color: #b5bbc4;
    }
</style>
@endsection

@section('messenger-content')
<div class="row">
    <div class="col-lg-12">
        <div class="list-group">
            @forelse($topics as $topic)
                <div class="row list-group-item d-flex">
                    <div class="col-lg-4">
                        <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                            @php($receiverOrCreator = $topic->receiverOrCreator())
                                @if($topic->hasUnreads())
                                    <strong class="color-info-900">
                                        {{ $receiverOrCreator !== null ? $receiverOrCreator->name   : '' }} ( {{ $receiverOrCreator !== null ?  $receiverOrCreator->data_user->company_name : '' }} )
                                    </strong>
                                @else
                                    {{ $receiverOrCreator !== null ? $receiverOrCreator->name : '' }} ( {{ $receiverOrCreator !== null ?  $receiverOrCreator->data_user->company_name : '' }} )
                                @endif
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="{{ route('admin.messenger.showMessages', [$topic->id]) }}">
                            @if($topic->hasUnreads())
                                <strong class="color-info-900">
                                    {{ $topic->subject }}
                                </strong>
                            @else
                                {{ $topic->subject }}
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-2 text-right">{{ $topic->created_at->diffForHumans() }}</div>
                    <div class="col-lg-1 text-center">
                        <form action="{{ route('admin.messenger.destroyTopic', [$topic->id]) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn-danger waves-effect waves-themed btn-xs" type="submit">
                                {{ trans('global.delete') }}
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="row list-group-item">
                    {{ trans('global.you_have_no_messages') }}
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection