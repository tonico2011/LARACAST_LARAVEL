<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => ['required', 'min:3']]);
        $project->addTask($attributes);

        // $attributes = request()->validate([
        //     'project_id' => $project->id,
        //     'description' => ['required', 'min:3']
        // ]);
        // Task::create($attributes);
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);
        return back();
    }

    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();



        // if (request()->has('completed')) {
        //     // Mark it complete
        //     $task->complete();
        // } else {
        //     $task->incomplete();
        // }

        // $task->complete(false);
        // $task->complete(request()->has('completed'));

        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);
        
        return back();
    }


}
