<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>epharma.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="backend/css/style.css">
    <script src="https://kit.fontawesome.com/3f0658f0c9.js" crossorigin="anonymous"></script>
<style>
  a {
    display: flex;
    align-items: center;
    padding: 8px 10px;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    color: #ededed;
    text-decoration: none;
    transition: 0.3s;
}
</style>
  </head>
  <body >
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <span class="icon">
             <i class="fa-solid fa-2x fa-suitcase-medical"></i>
          </span>
          <b>Online Pharmacy</b>
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#footer-dark">About</a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Covid-19 essential</Covid-19></a></li>
                  <li><a class="dropdown-item" href="#">Medical items</a></li>
                  <li><a class="dropdown-item" href="#">Medicine</a></li>
                 
                </ul>
              </li>
              
            </ul>
            
            <form class="row" role="search">
              <div class="col-md-7"> 
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              </div>
              <div class="col-md-2">
                <a class="btn btn-outline-light bg-light text-dark mx-2 " href="{{route('login')}}">login</a>
              </div>
              <div class="col-md-2">
                <a class="btn btn-outline-light  bg-light  text-dark mx-2 " href="{{route('cart')}}">Cart</a>
              </div>
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a class="btn btn-outline-light bg-light text-dark mx-2 " href="{{route('login')}}">login</a>
              <a class="btn btn-outline-light  bg-light  text-dark mx-2 " href="{{route('cart')}}">Cart</a> -->
              </form>
          </div>
        </div>
      </nav>
</header>

    <section class="main">
      <div class="container py-5">
        <div class="row py-4">
          <div class="col-lg-7 pt-5 text-center">
            <h1>“Always laugh when you can, it is cheap medicine.” </h1>
          </div>
        </div>
      </div>

      
      </section>
  </header>

  <section class="product">
      <div class="container py-5">
         
        <div class="row">
          <div class="col-lg-3 text-center ">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="{{asset('backend/img/napa.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Napa</h6>
            <p>৳20</p>
          <a class="btn btn-outline-light bg-primary text-light m-2" href="{{route('details')}}">View Details</a> 
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend\img\fexo120 .jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>fexo-120</h6>
            <p>৳73.60</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/Axim-Tablet-125-mg.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Axim-Tablet-125-mg</h6>
            <p>৳22.50</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/lijenta 5.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Lijenta 5mg</h6>
            <p>৳297.00</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/adovas.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Adovas</h6>
            <p>৳63.00</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/sergel.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Sergel</h6>
            <p>৳64.40</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/thermometer.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Thermometer Digital </h6>
            <p>৳120.00</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light">
              <div class="card body">
                <img src="backend/img/bandage.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>One Time Bandage</h6>
            <p>৳76.00</p>
            <button class="btn btn-outline-light bg-primary text-light my-2" type="submit">View Details</button>
          </div>

        </div>
      </div>
    
      </section>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <footer>
       <div id="footer-dark">
        <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">
                      <h3>Contact us</h3>
                      <ul>
                          <li>Address: 63/1, DIT Road, Malibagh,
                            Word-20, Dhaka 1200
                          </li>
                          <li>Hot Line: 01810-117100</li>
                          <li>Email: info@epharma.com.bd</li>
                      </ul>
                  </div>
                  <!-- <div class="col-sm-6 col-md-3 item">
                      <h3>Categories</h3>
                      <ul>
                          <li><a href="#">Covid-19 essential</a></li>
                          <li><a href="#">Medical items</a></li>
                          <li><a href="#">Medicine</a></li>
                      </ul>
                  </div> -->
                  <div class="col-md-6 item text">
                      <h3>Online Pharmacy</h3>
                      <p>Online Pharmacy brings to you a digital platform to provide you with best & convenient healthcare, convenient and safe and secure online shopping experience. We endeavor to provide products at a very competitive price coupled with highest standards of delivery to customers.</p>
                  </div>
                  
              </div>
              <p class="copyright">Copyright © 2022 Online Pharmacy. All rights reserved</p>
          </div>
        </div>
      </footer>        
  </body>
</html>