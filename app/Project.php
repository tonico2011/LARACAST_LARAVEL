<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    // public function addTask($description)
    // {
    //     $this->tasks()->create(compact('description'));
    // }
    
    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
