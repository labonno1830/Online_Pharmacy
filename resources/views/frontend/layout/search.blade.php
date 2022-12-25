@extends('frontend.master')

@section('content')
<section class="product">

    <div class="container py-5">
        <div class="row">
            @forelse($searchmed as $key=>$medicine)
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
            @empty
            <div class="alert alert-info" role="alert">
                <h5>No match found</h5>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection