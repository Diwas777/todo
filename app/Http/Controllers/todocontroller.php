<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
//to store data we have to use model as data passes via model

class todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //return view('todo.home');
    //todo is name of table and takeouting all data from table todo sending that data to home page via compact and in home page it is displaying via foreach loop
        $todos=todo::all();
        return view('todo.home',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        //on clicking on add new create function will be called and when clicked on submit 
        //then this function will be called
    //to store we use model as
        //use App/todo donot write todo.php
        //for this request also 
        //we have used use Illuminate\Http\Request;
        //return $request->all();


        $todo=new todo;
        $this->validate($request,[
            'title'=>'required|unique:todos',
            'body'=>'required',
            
        ]);
        $todo->body=$request->body;
        $todo->title=$request->title;
        $todo->save(); 
        return redirect('/todo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //return $id;
        $item=todo::find($id);
        return view('todo.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
