@extends('layout')

@section('content')
<h1>Create New Project</h1>


	<form method="POST" action="/projects">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="identifier" value="{{ $projectNumber }}{{ $year }}-00">
		<div class="form-group">
			<label>Project Identifier: {{ $projectNumber }}{{ $year }}-00</label>
		</div>
		<div class="form-group">
			<label>Project Name</label>
			<input class="form-control" type="text" name="name" />
		</div>
		<div class="form-group">
			<div class="inline-radio">
			<label>Projects Type: </label>
			@foreach ($projectTypes as $type)
				<label>
					{{ $type->name }}
					<input type="radio" name="projectType_id" value="{{ $type->id }}">
					
				</label>
			@endforeach
			</div>
		</div>
		<div class="form-group">
			<label>Project Status</label>
			<select class="form-control">
				@foreach ($projectStatuses as $status)
					<option value="{{ $status->id }}">{{ $status->name }}</options>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="@lang('messages.create-new')" />
		</div>
	</form>


@stop