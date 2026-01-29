<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller

{
    public function index()
    {
        $tasks = TaskModel::all();
        
        return view('index', compact('tasks'));
    }
}