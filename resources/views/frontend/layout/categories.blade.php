@extends('frontend.master')

@section('content')
<section class="product">
    <div class="container py-5">
        <div class="row">
          @foreach($medicines as $categoryitem)
         
            <div class="col-lg-3 text-center ">
                <div class="card border-0 ">
                    <div class="card body">
                       <h5 class="card-title">{{$categoryitem->category}}</h5>
                       <h6 class="card-subtitle mb-2 text-muted"></h6>
                       <h6 class="card-subtitle mb-2 text-muted"></h6>
                       <h6 class="card-subtitle mb-2 text-muted"></h6>
                    </div>
                </div>
            </div>
         
          @endforeach 
          
        </div>
    </div>
</section>
@endsection