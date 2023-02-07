<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
          <a class="nav-link active" aria-current="page" href="/login">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <h1 class="m-5">Add Notes</h1> -->
<div class="container w-50">
  <form action="{{url('/add') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="example" class="form-label mt-5"><h3>Title</h3> </label>
    <input type="text" name="title" class="form-control m-1" id="" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label "> <h3>Description</h3> </label>
    <textarea name="description"  class="form-control m-1"  cols="30" rows="10" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary m-4">Submit</button>
  </form>
</div>
</body>
</html>