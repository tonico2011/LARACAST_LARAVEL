<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
</head>
<body>
   <h1 class="title">Projects</h1>

   <ul>
      @foreach ($projects as $project)
         <li>
            <a href="/projects/{{ $project->id }}">
               {{ $project->title }}
            </a>
         </li>
      @endforeach
   </ul>

   <p>
      <a href="/projects/create">Create</a>
   </p>
   
</body>
</html>