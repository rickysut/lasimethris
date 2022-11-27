@extends('layouts.admin')
@section('content')
@include('partials.subheader')
<div class="row">
	<div class="col-12">
		<div id="panel-1" class="panel panel-lock show" data-panel-sortable data-panel-close data-panel-collapsed>
			<div class="panel-hdr">
				<h2>
					{{ trans('cruds.auditLog.title') }} | <span class="fw-300"><i>Lihat</i></span>
				</h2>
				<div class="panel-toolbar">
					<a class="btn btn-primary waves-effect waves-themed btn-sm mr-2" href="{{ route('admin.audit-logs.index') }}">
						{{ trans('global.back_to_list') }}
					</a>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="row">
						<div class="col-12">

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.description') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->description }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.subject_id') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->subject_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.subject_type') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->subject_type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.user_id') }}
                                        </th>
                                        <td>
                                            {{ ($auditLog->user_info->name ?? '-') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.properties') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->properties }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.host') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->host }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.auditLog.fields.created_at') }}
                                        </th>
                                        <td>
                                            {{ $auditLog->created_at }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection