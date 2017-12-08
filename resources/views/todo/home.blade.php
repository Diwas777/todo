@extends('layout.master')

@section('body')
<br>

<div class="col-lg-4 col-lg-offset-4">
	<a href="todo/create" class="btn btn-info">Add New</a>
	<center><h1 >Todo Lists</h1></center>
	<ul class="list-group">
		@foreach($todos as $todo)
		<li class="list-group-item">
			{{$todo->title}} {{--this body is getBodyAttribute()--}}

		<span class="pull-right">	{{$todo->created_at->diffforhumans()}}
		</span>
			
		</li>
			@endforeach
	</ul>
</div>
@endsection  {{-- donot write @show here because here we are using it--}}