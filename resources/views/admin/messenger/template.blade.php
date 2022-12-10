@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')

<div class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="panel" id="panel-1">
                <div class="d-flex h-100 flex-column">
                    <div class="px-3 px-sm-4 px-lg-2 py-4 align-items-center">
                        <a href="{{ route('admin.messenger.createTopic') }}" type="button" class="btn btn-success btn-sm btn-block fs-md" data-focus="message-to">{{ trans('global.new_message') }}</a>
                    </div>
                    <div class="flex-1 pr-1">
                        <a href="{{ route('admin.messenger.index') }}" class="{{ request()->is('admin/messenger') ? 'active open' : '' }}      dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md  d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                            <div>
                                <i class="fal fa-envelope width-1"></i>{{ trans('global.all_messages') }}
                            </div>
                            <div class="fw-400 fs-xs js-unread-emails-count"></div>
                        </a>
                        <a href="{{ route('admin.messenger.showInbox') }}" class="{{ request()->is('admin/messenger/inbox') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0 ">
                            <div>
                                @if($unreads['inbox'] > 0)
                                    <strong>
                                        <i class="fal fa-inbox-in width-1"></i>{{ trans('global.inbox') }}
                                        ({{ $unreads['inbox'] }})
                                    </strong>
                                @else
                                    <i class="fal fa-inbox-in width-1"></i>{{ trans('global.inbox') }}
                                @endif
                                
                            </div>
                            <div class="fw-400 fs-xs js-unread-emails-count"></div>
                        </a>
                        <a href="{{ route('admin.messenger.showOutbox') }}" class="{{ request()->is('admin/messenger/outbox') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                            <div>
                                @if($unreads['outbox'] > 0)
                                    <strong>
                                        <i class="fal fa-paper-plane width-1"></i>{{ trans('global.outbox') }}
                                        ({{ $unreads['outbox'] }})
                                    </strong>
                                @else
                                    <i class="fal fa-paper-plane width-1"></i>{{ trans('global.outbox') }}
                                @endif
                            </div>
                        </a>
                        <a href="{{route('admin.messenger.showTrash')}}" class="{{ request()->is('admin/messenger/trash') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                            <div>
                                <i class="fal fa-trash width-1"></i>Kotak Sampah
                            </div>
                        </a>
                    </div>
                    <div class="px-5 py-3 fs-nano fw-400 text-muted">
                        Simethris Messages System 1.0
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel" id="panel-1">
                <div class="panel-container show">
                    <div class="panel-content">
                        @yield('messenger-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop