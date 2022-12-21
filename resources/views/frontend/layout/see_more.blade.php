@extends('Frontend.master')
@section('content')
<section class="product">
    <div class="container py-5">
        <div class="row">
            <div class="alert alert-info" role="alert">
                <h3>{{$cat->name}}</h3>
            </div>
            @foreach($medicines as $key=>$medicine)
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
                <a class="btn btn-outline-light bg-primary text-light m-2"
                    href="{{route('details',$medicine->id)}}">View Details</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection