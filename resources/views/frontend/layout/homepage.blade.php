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
<section class="product">
    <div class="container py-5">

        <div class="row">
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
                <a class="btn btn-outline-light bg-primary text-light m-2" href="{{route('details',$medicine->id)}}">View Details</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
@endsection