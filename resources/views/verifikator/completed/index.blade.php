@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('onfarm_access')
@if (!empty($pagedata['alerttitle']))
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
@endif

@endcan
@endsection

@section('scripts')
@parent
<script>
	
	$(document).ready(function() {
        

    });

</script>


@endsection