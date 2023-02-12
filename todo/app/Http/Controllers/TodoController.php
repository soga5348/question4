<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::get();
        // return view('index',['todos' => $todos]);
        return view('index',compact('todos'));
    }
    public function store(TodoRequest $request){
        $todo = Todo::where('id',$request->id)->first();
        ($todo) ?? $todo = new Todo();    //??はif文の省略した書き方→falseの時は新しくモデルが作成される
        $todo->content = $request->content;
        $todo->save();
        return redirect()->route('index');

    }
    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->route('index');

    }
}
