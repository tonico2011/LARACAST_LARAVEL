@extends('layout')

@section('content')
   <h1 class="title">Create A New Project</h1>   

   <form method="POST" action="/projects">
      {{csrf_field()}}
   
      <div class="control">
         <label for="title" class="label">Title</label>
         <input type="text" class="input" name="title" placeholder="Project title" required>
      </div>
   
      <div>
         <label for="description" class="label">Description</label>

         <div>
            <textarea name="description" class="textarea"></textarea>
         </div>
      </div> 

      <div>
         <button type="submit" style="margin-top: 10px; margin-bottom: 10px">Create Project</button>
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