<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
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

        return redirect('todos.index');
    }
}
