@extends('layouts.admin')
@section('content')
@include('partials.subheader')
@can('dashboard_access')


@endcan
@endsection
@section('scripts')
@parent



@endsection