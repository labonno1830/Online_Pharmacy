@extends('backend.master')
@section('content')
 <style>
  .mycard {
    position: unset;
  } 
 </style>
    <section>
      <div class="container py-5"> 
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{session()->get('message')}}
      </div>
      @endif
        <div class="row mx-5">
          <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center ">
            <div class="card mycard  border-0 bg-primary"  >
              <div class="card mycard  body mt-3" >
                <i class="fa-sharp fa-2x fa-solid fa-tablets"></i>
                  <h3>Total medicines</h3>
                <h5>3</h5>
              </div>
            </div>
            
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
            <div class="card mycard  border-0 bg-primary">
              <div class="card mycard  body mt-3"> 
                <i class="fa-solid fa-2x fa-users"></i>
                  <h3>Total customers</h3>
                  <h5>3</h5>
              </div>
            </div>
            
          </div>
         
          <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
            <div class="card mycard  border-0 bg-primary">
              <div class="card mycard  body mt-3">
                <i class="fa-solid fa-2x fa-clipboard"></i>
                  <h3>Total orders</h3>
                  <h5>3</h5>
              </div>
            </div>
            
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-12   my-3 text-center">
            <div class="card mycard  border-0 bg-primary">
              <div class="card mycard  body mt-3">
                <i class="fa-solid fa-2x fa-inbox"></i>
                  <h3>Total sales</h3>
                  <h5>3</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

