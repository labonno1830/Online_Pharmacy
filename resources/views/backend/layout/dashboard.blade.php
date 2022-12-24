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
                <div class="card mycard  border-0 bg-primary">
                    <div class="card mycard  body mt-3">
                        <i class="fa-sharp fa-2x fa-solid fa-tablets"></i>
                        <h3>Add Medicine</h3>
                        <h4> {{$medi}}</h4>
                        <!-- <a href="{{route('add_medicine')}}" class="btn btn-primary" role="button">View</a> -->
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                <div class="card mycard  border-0 bg-primary">
                    <div class="card mycard  body mt-3">
                        <i class="fa-solid fa-2x fa-users"></i>
                        <h3>Customer list</h3>
                        <h4> {{$customer}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                <div class="card mycard  border-0 bg-primary">
                    <div class="card mycard  body mt-3">
                    <i class="fa-solid fa-2x fa-list"></i>
                        <h3>Category</h3>
                        <h4>{{$category}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                <div class="card mycard  border-0 bg-primary">
                    <div class="card mycard  body mt-3">
                    <i class="fa-solid fa-2x fa-layer-group"></i>
                        <h3>Doctors Category</h3>
                        <h4>{{$doc_cat}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                <div class="card mycard  border-0 bg-primary">
                    <div class="card mycard  body mt-3">
                    <i class="fa-solid fa-2x fa-address-book"></i>
                        <h3>Order list</h3>
                        <h4> {{$od}}</h4>
                    </div>
                </div>
            </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                    <div class="card mycard  border-0 bg-primary">
                        <div class="card mycard  body mt-3">
                        <i class="fa-solid fa-2x fa-user-doctor"></i>
                            <h3>Doctors Information</h3>
                            <h4> {{$doc}}</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-3 text-center">
                    <div class="card mycard  border-0 bg-primary">
                        <div class="card mycard  body mt-3">
                        <i class="fa-solid fa-2x fa-truck-ramp-box"></i>
                            <h3>Suppliers Information</h3>
                            <h4> {{$supp}}</h4>
                        </div>
                    </div>
                </div>

                
               
          
        </div>
    </div>
    
</section>
@endsection