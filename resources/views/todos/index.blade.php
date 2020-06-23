
@extends('layouts.app')
@section('title')
Todos
@endsection

@section('content')

<h1 style="text-align: center; text-transform: uppercase;" class="my-5">Todos Page</h1>
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header">TODO</div>
			<div class="card-body">
				@foreach($todos as $todo)
					<ul class="list-group">
						<li class="list-group-item">
							{{ $todo->name }}
							@if(!$todo->completed)
							<a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-right text-white">Complete</a>
							@endif
							<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">view</a>
						</li>
					</ul>
				@endforeach
			</div>
	    </div>
	</div>
</div>

@endsection