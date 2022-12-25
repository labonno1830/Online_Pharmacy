@extends('Frontend.master')
@section('content')
<section class="product">
    <div class="container py-5">
        <div class="row">
            @foreach($doc_cate as $doc_cates)
            <div class="alert alert-info" role="alert">
                <h5>{{$doc_cates->name}}</h5>
            </div>
            @foreach($doctors as $doctor)
            @if($doctor->cate_id == $doc_cates->id)
            <div class="col-lg-3 text-center ">
                <div class="card border-0 ">
                    <div class="card body">
                        <h5 class="card-title">{{$doctor->name}}</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">{{$doctor->doc_category->name}}</h6> -->
                        <h6 class="card-subtitle mb-2 text-muted">{{$doctor->hospital}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$doctor->phone}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$doctor->time}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$doctor->days}}</h6>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>
    </div>
</section>
@endsection