<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr' , Todo::all());
    }

 
    public function edit(Todo $todo)
    {
        //
    }


    public function update(Request $request, Todo $todo)
    {
        //
    }

 
    public function destroy(Todo $todo,$id)
    {
        Todo::destroy(array('id', $id));
        return redirect ('todo_show');
    }
}
