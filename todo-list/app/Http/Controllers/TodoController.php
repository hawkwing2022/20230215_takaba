<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view ('index', ['todos' => $todos]);
    }
    public function create(TodoRequest $request)
    {
        $form = $request -> all();
        Todo::create($form);
        return redirect('/');
    }
    public function modify(TodoRequest $request)    
    {
        $form = $request->all();
        unset ($form['_token']);
        Todo::where('id', $request->id)->update($form);
        // $id = $request->id;
        // $form = Todo::find($id);
        // $form->task = $request->task;
        // $form->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $id = $request->deleted_id;
        Todo::find($id)->delete();
        return redirect('/');
    }
}
