@extends('layout')

@section('content')
<h1>@lang('messages.all-project-status-title')</h1>
<ul class="list-group">
	@foreach ($statuses as $status)
	
	<li class="list-group-item">
		<a href="/project-statuses/{{ $status->id }}">{{ $status->name }}</a> | <a class="btn btn-danger" href="/project-statuses/{{ $status->id }}/delete">@lang('messages.delete')</a>
	</li>
	@endforeach
</ul>
<a class="btn btn-primary" href="/project-statuses/new">@lang('messages.new-project-status-btn')</a>

@stop