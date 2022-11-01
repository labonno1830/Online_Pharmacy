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
<div class="main2 py-5 px-5">
  <form action="{{route('register')}}" method="POST" class="col-10 mx-2 my-2">
    @csrf
    <h1>Online Pharmacy</h1>
    <div class="col-5 mx-2 my-2">
      <label for="name" class="form-label text-dark">Name</label>
      <input class="form-control" type="text" name="name" placeholder="Enter your name" for="name">
    </div>

    <div class="col-5 mx-2 my-2">
      <label for="phone" class="form-label text-dark">Phone Number</label>
      <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone">
    </div>

    <div class="col-5 mx-2 my-2">
      <label for="email" class="form-label text-dark">Email</label>
      <input class="form-control" type="email" name="email" placeholder="Enter your email" for="email">
    </div>
    <div class="col-5 mx-2 my-2">
      <label for="password" class="form-label text-dark">Password</label>
      <input class="form-control" type="password" name="password" placeholder="Enter your password" for="password">

    </div>
    <!-- <div class="col-5 mx-2 my-2">
            <label for="confirm" class="form-label text-dark">Confirm Password</label>
            <input class="form-control" type="text" placeholder="Confirm your password" for="confirm">
          </div> -->

    <!-- <div class="col-5  mx-2 my-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label text-dark" for="gridCheck">
                    Agree to terms and conditions
                  </label>
                </div>
              </div> -->
    <div class="col-5 mx-2 my-4">
      <button type="submit" class="btn btn-primary  reg ">Register</button>
    </div>
  </form>
</div>
</body>
</html>