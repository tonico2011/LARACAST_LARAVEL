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
    
    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect('/projects');
        
    }
    // Here using 'route model wrapping'
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }   

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        // dd('hello');
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');

    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
