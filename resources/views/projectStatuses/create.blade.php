@extends('layout')

@section('content')
<h1>@lang('messages.create-project-status-title')</h1>
<form method="POST" action="/project-statuses">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>@lang('messages.status-name')</label>
		<input class="form-control" type="text" name="name" />
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="@lang('messages.create-new')" />
	</div>
</form>

@stop