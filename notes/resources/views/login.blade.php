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
<form action="{{route('login2')}}" method="post">
  @csrf
  @if(Session::has('fail'))
  <div class="alert alert-danger">{{Session::get('fail')}}</div>
  @endif
<h1 class="text-center mt-5">LOGIN</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label mx-4 ">Email address</label>
    <input type="email"  name="email" class="form-control mx-4" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text mx-4">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label mx-4">Password</label>
    <input type="password" name="password" class="form-control mx-4" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary mx-4">Submit</button>
  <a href="/user">don't have an account? signup here !!!</a>
</form>

</body>
</html>