@extends('layout.master')

@section('body')
<br>

<div class="col-lg-4 col-lg-offset-4">
	<a href="todo/create" class="btn btn-info">Add New</a>
	<center><h1 >Todo Lists</h1></center>
	<ul class="list-group">
		<li class="list-group-item">
			
			This is first item
		</li>
	</ul>
</div>
@endsection  {{-- donot write @show here because here we are using it--}}