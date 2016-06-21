@extends('layout')

@section('content')
<h2>@lang('messages.all-task-types-title')</h2>
<ul class="list-group">
	@foreach ($taskTypes as $type)
	
	<li class="list-group-item">
		{{ $type->name }} | <a class="btn btn-danger" href="/task-types/{{ $type->id }}/delete">@lang('messages.delete')</a>
	</li>
	@endforeach
</ul>
<a class="btn btn-primary" href="/task-types/new">@lang('messages.new-task-type-btn')</a>

@stop