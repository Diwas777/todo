@extends('layout.master')

@section('body')

<br>

<div class="col-lg-4 col-lg-offset-4"> 
<h2>{{substr(Route::currentRouteName(),5)}} Item </h2>
<a href="/todo" class="btn btn-info">Back</a>
<form class="form-horiontal" action="/todo/@yield('editId')" method="POST">
 	{{csrf_field()}}              {{--/todo only for store--}}
 									{{--/todo/@yield('editId')" only for store--}}

	@section('editMethod')   {{--also @yield('editMethod') will work--}}
	@show                    
<fieldset>
	  	<div class="form-group">
	      <br>
	      <div class="col-lg-10">
	      <input type="text" name="title" value="@yield('editTitle')" placeholder="title"  class="form-control">
	  		</div>
	      <div class="col-lg-10">
	      <textarea class="form-control" id="Textarea"  rows="3" name="body">@yield('editBody')</textarea>
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