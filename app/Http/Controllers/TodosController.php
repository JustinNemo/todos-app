<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo)
    {

        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        //create function for todos
        return view('todos.create');
    }

    public function store()
    {
    
        //data validation kung may naka input talaga etc
        $this->validate(request(),[
        'name' => 'required|min:8|max:20',
        'description' => 'required'
        ]);
        //to fetch all data inputted
       $data = request()->all();
        
       //$todo = new Todo(); will generate new todo
       $todo = new Todo();
       //this codes will push all $data to $todo
       $todo->name = $data['name'];
       $todo->description = $data['description'];
       $todo->completed = false;

       //this is a save function to save all the data to Database
       $todo->save();

       session()->flash('success', 'Todo Created Successfully!');
        
       //redirect the user to todos page
       return redirect('/todos');
    }

    public function edit(Todo $todo)
    {

        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
         //data validation kung may naka input talaga etc
         $this->validate(request(),[
            'name' => 'required|min:8|max:20',
            'description' => 'required'
            ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        session()->flash('success', 'Todo is Updated!');
        
        return redirect('/todos');

    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo Deleted Successfully!');
        

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'Todo Completed!');

        return redirect('/todos');
    }
}
