<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $totalTasks=auth()->user()->tasks()->count();
        $tasks=auth()->user()->tasks();

        return view('tasks.index',compact('tasks','totalTasks'));

    }

    public function store(Request $request)
    {
        auth()->user()->tasks()->create([
            'title'=>$request->title,
            'status'=>false,
        ]);
        return back();

    }
}
