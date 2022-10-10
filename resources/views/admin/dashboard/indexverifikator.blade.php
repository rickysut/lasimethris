@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('dashboardv_access')


@endcan
@endsection
@section('scripts')
@parent



@endsection