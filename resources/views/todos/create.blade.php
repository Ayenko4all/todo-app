@extends('layouts.app')
@section('title')
Create Todo
@endsection

@section('content')
<h1 class="text-center my-5">Create Todos</h1>
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card card-default">
			<div class="card-header">Create new todo</div>
			<div class="card-body">
				@if($errors->any())
				<div class="alert alert-danger">
					<ul class="list-group">
						@foreach($errors->all() as $error)
							<li class="list-group-item">
								{{ $error }}
							</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form class="form-group" method="post" action="/store-todos">
					@csrf
					<div class="container">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<textarea name="description" placeholder="Description" cols="5" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-sm" type="submit">Create Todo</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

