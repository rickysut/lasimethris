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

<table id="dt-maillist" class="table table-sm table-bordered table-hover table-striped w-100">
    <thead >
        <tr>
            <th style="width:18%;">@if ($topics->count() > 0 && $topics[0]->creator_id == Auth::id())
                Penerima
            @else
                Pengirim    
            @endif
            </th>
            <th style="width:50%;">Subject</th>
            <th style="width:10%;">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @forelse($topics as $topic)
        <tr class="fw-500 unread">
            <td>
                <a href="{{ route('admin.messenger.showMessages', $topic) }}">
                    @php($receiverOrCreator = $topic->receiverOrCreator())
                    @if($topic->hasUnreads())
                        <strong class="color-info-900">
                            {{ $receiverOrCreator !== null ? $receiverOrCreator->name   : '' }} ( {{ $receiverOrCreator !== null ?  $receiverOrCreator->data_user->company_name : '' }} )
                        </strong>
                    @else
                        {{ $receiverOrCreator !== null ? $receiverOrCreator->name : '' }} ( {{ $receiverOrCreator !== null ?  $receiverOrCreator->data_user->company_name : '' }} )
                    @endif
                </a>
            </td>
            <td>
                <a href="{{ route('admin.messenger.showMessages' , $topic) }}">
                    @if($topic->hasUnreads())
                        <strong class="color-info-900">
                            {{ $topic->subject }}
                        </strong>
                    @else
                        {{ $topic->subject }}
                    @endif
                </a>
            </td>
            
            <td>
                {{ $topic->created_at->diffForHumans() }}    
            </td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
        


@endsection

@section('scripts')

@parent
<script>
    $(document).ready(function() {

        $('#dt-maillist').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            select: true,
            pageLength: 10,
            dom:
                
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'B><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'selectAll',
                    text: 'All',
                    className: 'btn-outline-secondary btn-xs mr-1'
                },
                {
                    extend: 'selectNone',
                    text: 'Deselect',
                    className: 'btn-outline-secondary btn-xs mr-1'
                },
                {
                    extend: 'selected',
                    text: '<i class="fal fa-times mr-1"></i> Delete',
                    name: 'delete',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    text: '<i class="fal fa-sync mr-1"></i> Refresh',
                    name: 'refresh',
                    className: 'btn-outline-primary btn-xs'
                },
                
            ],
            order: [
                [2, 'desc']
            ]

        });
    });
</script>

@endsection