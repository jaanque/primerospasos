<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Y CAMBIA la llamada al modelo dentro del método:
        $tasks = TaskModel::all(); // Usa TaskModel::all()
        
        return view('index', compact('tasks'));
    }
}