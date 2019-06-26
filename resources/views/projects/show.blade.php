@extends('layout')

@section('content')
   <h1 class="title">{{ $project->title }}</h1>

   <div>
      {{ $project->description }}
      <p>
         <a href="/projects/{{ $project->id }}/edit">Edit</a>
      </p>
   </div>

   @if ($project->tasks->count())
      <div class="box">
         @foreach ($project->tasks as $task)
             <div>
               {{-- PATCH /projects/id/tasks/id  or
                    PATCH /tasks/id
               --}}
               <form method="POST" action="/tasks/{{ $task->id }}">
                  {{-- update so using PATCH --}}
                  @method('PATCH')
                  @csrf
                  <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : ''}}">
                     <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                     {{ $task->description }}
                  </label>
               </form>

            </div>
         @endforeach
      </div>
   @endif

   {{-- Add a new task from --}}
   <form class="box" method="POST" action="/projects/{{ $project->id }}/tasks">
      @csrf
      <div class="field">
         <label for="description" class="label">New Task</label>

         <div class="control">
            <input type="text" class="input" name="description" placeholder="New Task" >
         </div>
      </div>

      <div class="field">
         <div class="control">
            <button type="submit" class="button is-link" style="margin-top: 10px; margin-bottom: 10px" >Add Task</button>
         </div>
      </div>

      @if ($errors->any())

      <div class="notification is-danger" >
            <ul>
               @foreach ($errors->all() as $error)
                   <li>
                      {{ $error }}
                   </li>
               @endforeach
            </ul>
         </div>

      @endif

   </form>

@endsection
