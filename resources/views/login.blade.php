<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="backend/css/style.css">
    <script src="https://kit.fontawesome.com/3f0658f0c9.js" crossorigin="anonymous"></script>
</head>
<body>
  
  @if(session()->has('message'))
  <div class="alert alert-danger">
    {{ session()->get('message') }}
  </div>
  @endif
  <form action="{{route('login_post')}}" method="POST">
    @csrf
    <section class="main1 py-5 px-5">

      <div class="container">
        <form class="col px-5 py-5 ">
          <div class="name mx-3 ">
            <h1>Online Pharmacy</h1>
          </div>
          <div class="col-5 mx-2 my-2">
            <label for="email" class="form-label text-dark">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter your email" for="email">
          </div>
          <div class="col-5 mx-2 my-2">
            <label for="password" class="form-label text-dark">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter your password" for="password">
          </div>
          <div class="col-5 mx-2 my-2">
            <button type="submit" class="btn btn-info  reg">Sign in</a>
          </div>
          <div class="col-5 mx-2 my-2">
            <a class="btn btn-info  reg" href="{{route('registration')}}">Registrations</a>
          </div>

        </form>
      </div>

    </section>
  </form>
  </body>
</html>

