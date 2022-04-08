<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
     //   $tasks = DB::table('tasks')->get();
        $tasks = DB::table('tasks')->where('name', 'like', 'Task%')->get();
        return view('contact_us',compact('tasks'));
    }
    public function show($id)
    {
        $tasks = DB::table('tasks')->find($id);
        return view('tasks', compact('tasks'));
    }
}
