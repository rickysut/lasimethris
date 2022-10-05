@extends('layouts.admin')
@section('content')
@include('partials.subheader')
@can('landing_access')


@endcan
@endsection
@section('scripts')
@parent



@endsection