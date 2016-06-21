@extends('layout')

@section('content')
<h2>@lang('messages.create-task-type-title')</h2>

<form method="POST" action="/task-types">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>@lang('messages.task-type-name')</label>
		<input class="form-control" type="text" name="name" />
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="@lang('messages.create-new')" />
	</div>
</form>


@stop