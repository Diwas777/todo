@extends('layout.master')
@section('body')

<div class="col-lg-4 col-lg-offset-8">  
<h1> Title is : {{$item->title}} </h1><br>
<h2> Body is : {{$item->body}} </h2>
</div>
@endsection