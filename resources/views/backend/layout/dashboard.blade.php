@extends('backend.master')
@section('content')
 <style>
  .product .card{
    position: unset;
  } 
 </style>
    <div class="product">
        <div class="container py-5">
        
          <div class="row">
            <div class="col-lg-4 text-center ">
              <div class="card border-0 bg-primary"  >
                <div class="card body mt-3" >
                  <i class="fa-sharp fa-2x fa-solid fa-tablets"></i>
                    <h3>Total medicines</h3>
                  <h5>3</h5>
                </div>
              </div>
              
            </div>
            <div class="col-lg-4 text-center">
              <div class="card border-0 bg-primary">
                <div class="card body mt-3"> 
                  <i class="fa-solid fa-2x fa-users"></i>
                    <h3>Total customers</h3>
                    <h5>3</h5>
                </div>
              </div>
              
            </div>
           
            <div class="col-lg-4 text-center">
              <div class="card border-0 bg-primary">
                <div class="card body mt-3">
                  <i class="fa-solid fa-2x fa-clipboard"></i>
                    <h3>Total orders</h3>
                    <h5>3</h5>
                </div>
              </div>
              
            </div>
            <div class="col-lg-4 my-4 text-center">
              <div class="card border-0 bg-primary">
                <div class="card body mt-3">
                  <i class="fa-solid fa-2x fa-inbox"></i>
                    <h3>Total sales</h3>
                    <h5>3</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
@endsection

