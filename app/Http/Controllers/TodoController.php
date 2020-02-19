<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::orderBy('created_at','desc')->paginate(10);
        return view('todos.index', ['todos' => $todos]);
    }

    public function create(Request $request)
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {   

        $todo = new Todo;

        $todo->morning = $request->get('morning');
        $todo->afternoon = $request->get('afternoon');
        $todo->evening = $request->get('evening');
        $todo->tomorrow = $request->get('tomorrow');

        $todo->save();

        return redirect('todos.index')->with('message','task has been added successfully!');
    }


    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->morning = $request->get('morning');
        $todo->afternoon = $request->get('afternoon');
        $todo->evening = $request->get('evening');
        $todo->tomorrow = $request->get('tomorrow');

        $todo->save();

        return redirect('todos.index')->with('message','task has been updated successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('todos.index')->with('message','task has been removed.');
    }
}
