@extends('Frontend.master')
@section('content')
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
    @endsection 
  