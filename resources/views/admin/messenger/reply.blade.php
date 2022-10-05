@extends('admin.messenger.template')

@section('title', trans('global.new_message'))

@section('messenger-content')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route("admin.messenger.reply", [$topic->id]) }}" method="POST">
            @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 form-group">
                            <label for="content" class="control-label">
                                {{ trans('global.content') }}
                            </label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <button class="btn btn-success btn-sm mt-4" type="submit">
                        {{ trans('global.reply') }}
                    </button>
                    {{-- <input type="submit" value="{{ trans('global.reply') }}" class="btn btn-success" /> --}}
                </div>
            </div>
        </form>
    </div>
</div>
@stop