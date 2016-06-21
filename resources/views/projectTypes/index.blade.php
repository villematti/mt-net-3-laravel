@extends('layout')

@section('content')
<h1>@lang('messages.all-project-type-title')</h1>
<ul class="list-group">
	@foreach ($types as $type)
	
	<li class="list-group-item">
		{{ $type->name }} | <a class="btn btn-danger" href="/project-types/{{ $type->id }}/delete">@lang('messages.delete')</a>
	</li>
	@endforeach
</ul>
<a class="btn btn-primary" href="/project-types/new">@lang('messages.new-project-type-btn')</a>

@stop