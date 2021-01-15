<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }
    public function create(){
        return view('todos.create');
    }
    public function store(TodoCreateRequest $request){
        auth()->user()->todos()->create($request->all());
        return redirect(route('todo.index'))->with("message", "Todo Created Successfully.");
    }
    public function edit(Todo $todo){
        return view('todos.edit', compact('todo'));
    }
    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update($request->all());
        return redirect(route('todo.index'))->with("message", "Todo Updated Successfully.");
    }
    public function complete(Todo $todo){
        $todo->update(['completed' => true]);
        return redirect(route('todo.index'))->with("message", "Todo Completed Successfully.");
    }
    public function incomplete(Todo $todo){
        $todo->update(['completed' => false]);
        return redirect(route('todo.index'))->with("message", "Todo InCompleted Successfully.");
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect(route('todo.index'))->with("error", "Todo Deleted Successfully.");
    }
}
