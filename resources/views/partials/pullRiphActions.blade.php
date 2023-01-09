@can($viewGate)
    <a class="btn btn-xs btn-primary" data-toggle="tooltip" title data-original-title="Lihat Rincian" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
        <i class="fal fa-search-plus"></i><!--{{ trans('global.view') }}-->
    </a>
@endcan


@can($deleteGate)
    <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}"  method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-xs btn-danger"  value="{{ trans('global.delete') }}"><i class="fas fa-trash"></i></button>
    </form>
@endcan
