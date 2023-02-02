<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/get">view notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/create">add notes</a>
</li>
<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="/logout">logout</a>
</li>
      </ul>
    </div>
  </div>
</nav>
    <table  class="table">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
        
        </tr>
        @foreach($user as $r)
        <tr>
          <td>{{ $r->id }}</td>
          <td>{{ $r->title }}</td>
          <td>{{ $r->description}}</td>
          <!-- <td><a href="" class="btn btn-primary">Edit</a></td> -->
          <td><a href="{{ url('/delete/' . $r->id) }}" class="btn btn-danger">Delete</a>
          <a href="{{ url('/edit/' . $r->id) }}" class="btn btn-primary">Edit</a></td>
         


          
        
        </tr>
        @endforeach
       
      </table>
     
</body>
</html>