@extends('todo.create')
{{--edit ra create ko layout eutai hunxa--}}

@section('editTitle',$item->title)  {{-- jun hami yield garera lya ko data ko @endsection hudaina .Here we are putting title field of database into edit title field--}}


@section('editBody',$item->body)
{{--This is equivalent to 
@section('editBody')
{{$item->body}}
@stop
OR
@section('editBody')
{{$item->body}}
@endsection

--}}


@section('editMethod')
	{{method_field('PUT')}}  {{--for update--}}
@endsection  
{{--@stop will also work--}}

@section('editId',$item->id)
