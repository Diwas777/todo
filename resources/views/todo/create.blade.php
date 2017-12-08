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
	      <textarea class="form-control" id="Textarea" rows="3" name="body"></textarea>
	      <br>
	      <button type="submit" class="btn btn-success">Submit</button>
	    </div>
	    </fieldset>
	</form>

</div>
	
@endsection