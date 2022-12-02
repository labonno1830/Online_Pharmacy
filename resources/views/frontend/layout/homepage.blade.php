@extends('Frontend.master')
@section('content')
<section class="main">
    <div class="container py-5">
    @if(session()->has('message'))
      <div class="alert alert-success">
        {{session()->get('message')}}
      </div>
      @endif
        <div class="row py-4">
            <div class="col-lg-7 pt-5 text-center">
            <h1>“Medicines cure diseases, but only doctors can cure patients.”</h1>
                <!-- <h1>“Always laugh when you can, it is cheap medicine.” </h1> -->
            </div>
        </div>
    </div>
</section>
<section class="product">
    <div class="container py-5">
        <div class="row">
            @foreach($medicines as $key=>$medicine)
            @if($medicine->status == 1 && $medicine->quantity != 0)
            <div class="col-lg-2 text-center ">
                <div class="card border-0 bg-light">
                    <div class="card body">
                        @if($medicine->upload !=null)
                        <img src="{{asset('/uploads/medicine/'.$medicine->upload)}}" alt=""
                            style="object-fit: cover;  height:100px;width: 194px;">
                        @endif
                    </div>
                </div>
                <h6>{{$medicine->medicine_name}}</h6>
                <p>{{$medicine->price}}</p>
                <a class="btn btn-outline-light bg-primary text-light m-2" href="{{route('details',$medicine->id)}}">View Details</a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection