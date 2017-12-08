@extends('layout.master')

@section('body')

<br>

<div class="col-lg-4 col-lg-offset-4"> 
<h2>Create new </h2>
<a href="/todo" class="btn btn-info">Back</a>
<form class="form-horiontal" action="/todo" method="POST">
	{{csrf_field()}}
<fieldset>
	  	<div class="form-group">
	      <br>
	      <div class="col-lg-10">
	      <input type="text" name="title" placeholder="title"  class="form-control">
	  		</div>
	      <div class="col-lg-10">
	      <textarea class="form-control" id="Textarea" rows="3" name="body"></textarea>
	  </div>
	      <br>
	      <button type="submit" class="btn btn-success">Submit</button>
	    </div>
	    </fieldset>
	</form>

	@if(count($errors)>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			{{$error}}
		@endforeach
		</div>
	@endif

	
@endsection