<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Method to display all Todos
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    // Method to display a specific Todo
    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', ['todo' => $todo]);
    }

    // Method to display the create form
    public function create()
    {
        return view('todos.create');
    }

    // Method to store the newly created Todo
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'completed' => 'nullable',
        ]);
        Todo::create($validatedData);

        return redirect('/todos')->with('success', 'Todo created successfully.');
    }

    // Method to display the edit form
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    // Method to update the specified Todo
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'completed' => 'nullable',
        ]);

        Todo::findOrFail($id)->update($validatedData);

        return redirect('/todos')->with('success', 'Todo updated successfully.');
    }

    // Method to delete the specified Todo
    public function destroy($id)
    {
        Todo::findOrFail($id)->delete();
        return redirect('/todos')->with('success', 'Todo deleted successfully.');
    }
}
