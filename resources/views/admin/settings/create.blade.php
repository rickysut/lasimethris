@extends('layouts.admin')
@section('content')
@include('partials.subheader')
<div class="row">
	<div class="col-12">
		<div id="panel-1" class="panel panel-lock show" data-panel-sortable data-panel-close data-panel-collapsed>
			<form method="POST" action="{{ route("admin.settings.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="panel-hdr">
                    <h2>
                        {{ trans('cruds.setting.title') }} | <span class="fw-300"><i>Tambah</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <div class="form-group">
                            <button class="btn btn-outline-success btn-pills waves-effect waves-themed btn-sm mr-2" type="submit">
                                {{ trans('global.save') }}
                            </button>
                            <a class="btn btn-outline-danger btn-pills waves-effect waves-themed btn-sm mr-2" href="{{ route('admin.settings.index') }}">
                                {{ trans('global.cancel') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nm_org">{{ trans('cruds.setting.fields.nm_org') }}</label>
                                    <input class="form-control {{ $errors->has('nm_org') ? 'is-invalid' : '' }}" type="text" name="nm_org" id="nm_org" value="{{ old('nm_org', '') }}">
                                    @if($errors->has('nm_org'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nm_org') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.setting.fields.nm_org_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">{{ trans('cruds.setting.fields.alamat') }}</label>
                                    <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
                                    @if($errors->has('alamat'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('alamat') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.setting.fields.alamat_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">{{ trans('cruds.setting.fields.telepon') }}</label>
                                    <input class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" type="text" name="telepon" id="telepon" value="{{ old('telepon', '') }}">
                                    @if($errors->has('telepon'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('telepon') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.setting.fields.telepon_helper') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection