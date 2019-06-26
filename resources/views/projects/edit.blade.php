@extends('layout')

@section('content')
    <h1 class="title">Edit Projects</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
        </div>       

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

        <div>
            <label for="description" class="label">Description</label>

            <div>
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
       
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
