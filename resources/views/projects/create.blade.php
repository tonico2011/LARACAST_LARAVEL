<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
</head>
<body>
   <h1>Create A New Project</h1>   

   <form method="POST" action="/projects">
      {{csrf_field()}}
      <div>
         <input type="text" name="title" placeholder="Project title">
      </div>

      <div>
         <textarea name="description" placeholder="Project Description"></textarea>
       </div>

       <div>
          <button type="submit">Create Project</button>
       </div>
   </form>
</body>
</html>