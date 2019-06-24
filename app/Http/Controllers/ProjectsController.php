<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call app
use App\Project; 

class ProjectsController extends Controller
{
    public function index()
    {
        //query database
        $projects = Project::all();
        
        return view('projects.index', compact('projects'));
    }
}
