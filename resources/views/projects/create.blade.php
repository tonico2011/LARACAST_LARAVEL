@extends('layout')

@section('content')
   <h1 class="title">Create A New Project</h1>   

   <form method="POST" action="/projects">
      {{csrf_field()}}
   
      <div class="control">
         <label for="title" class="label">Title</label>
         
         <div>
            <input type="text" class="input" name="title" {{ $errors->has('title') ? 'is-danger' : '' }} value="{{ old('title') }}">
         </div>
      </div>
   
      <div>
         <label for="description" class="label">Description</label>

         <div>
            <textarea name="description" class="textarea" {{ $errors->has('description') ? 'is-danger' : '' }}>{{ old('description') }}</textarea>
         </div>
      </div> 

      <div class="field">
         <div class="control">
            <button type="submit" class="button is-link" style="margin-top: 10px; margin-bottom: 10px">Create Project</button>
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