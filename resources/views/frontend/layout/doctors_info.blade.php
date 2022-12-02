@extends('Frontend.master')
@section('content')
<section class="product">
    <div class="container py-5">
        <div class="row">
            @foreach($doctors as $doctor)
            <div class="col-lg-3 text-center ">
                <div class="card border-0 ">
                    <div class="card body">
                       <h5 class="card-title">{{$doctor->name}}</h5>
                       <h6 class="card-subtitle mb-2 text-muted">{{$doctor->department}}</h6>
                       <h6 class="card-subtitle mb-2 text-muted">{{$doctor->hospital}}</h6>
                       <h6 class="card-subtitle mb-2 text-muted">{{$doctor->phone}}</h6>
                       <h6 class="card-subtitle mb-2 text-muted">{{$doctor->time}}</h6>
                       <h6 class="card-subtitle mb-2 text-muted">{{$doctor->days}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection