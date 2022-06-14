<style>
form{
  width: 500px;
  height: auto;
  background: skyblue;
  margin: auto;
  padding: 2rem;
  border-radius: .5rem;
}
input{
  width: 100%;
  height: 40px;
  border:1px solid black;
  margin-block: 1rem;
}
</style>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>








<div class="container mt-5">
    <form action="{{url('/')}}/register" method="post">
          @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id=""  placeholder="Enter Your Name" value="{{old('name')}}">
            <span class="text-danger">
              @error('name')
              {{$message}}
              @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id=""  placeholder="Enter Your email" value="{{old('name')}}">
            <span class="text-danger">
              @error('email')
              {{$message}}
              @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id=""  placeholder="Enter Your Password">
            <span class="text-danger">
              @error('password')
              {{$message}}
              @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password_confi" class="form-control" id=""  placeholder="Confirm Password">
            <span class="text-danger">
              @error('password_confi')
              {{$message}}
              @enderror
            </span>
        </div>
      
        
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
