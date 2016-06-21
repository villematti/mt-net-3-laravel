@extends('layout')

@section('content')



<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{{ $year }}
		<h1>{{ $worker->name }}</h1>
		<ul class="list-group">
			@foreach ($worker->jobs as $job)
				<li class="list-group-item">{{ $job->project->type->name }}</li>
			@endforeach
		</ul>
	</div>
</div>


@stop