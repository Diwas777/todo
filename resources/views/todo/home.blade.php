@extends('layout.master')

@section('body')
<br>
@if (session()->has('message'))
	
<h1 class="alert alert-success">	{{session()->get('message')}} </h1>

@endif

<div class="col-lg-4 col-lg-offset-4">
	<a href="todo/create" class="btn btn-info">Add New</a>
	<center><h1 >Todo Lists</h1></center>
	<ul class="list-group">
		@foreach($todos as $todo)
		<li class="list-group-item">
		<a href="{{'/todo/'.$todo->id}} ">	{{$todo->title}} 
			{{--this title is getTitleAttribute() this is for show when clicked on title --}}
		</a>
		<span class="pull-right">	{{$todo->created_at->diffforhumans()}}
		</span>
			{{-- for edit part--}}
			<a href="{{'/todo/'.$todo->id.'/edit'}}">Edit</a>
		
		{{--for delete--}}
		<form class="form-group float-right" action="{{'todo/'.$todo->id}}" method="post">
			{{csrf_field()}}     
			{{method_field('DELETE')}} 
			{{--Note this method_field is for routing route ie. allow to goto delete() function inside todocontroller and above 'post' method  is for form(donot use get method becoz it will call show () method becoz first priority is always form--}}
			<button type="submit" >Del</button>
		</form>
		{{--end of delete--}}

		</li>
			@endforeach
	</ul>
</div>
@endsection  {{-- donot write @show here because here we are using it--}}