@extends('Frontend.master')
@section('content')
<div class="Form my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card border-2 bg-light">
                    <div class="card body">
                        <img src="{{asset('/uploads/medicine/'.$medicine->upload)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h3>{{$medicine->medicine_name}}</h3>
                <h5>Price:৳{{$medicine->price}}</h5>
                <div class="product-quantity my-2">
                    <!-- <span>Quantity</span> -->
                    <div class="d-flex flex-row">
                        Quantity
                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="2" type="number"
                            class="form-control form-control-sm" style="width: 50px;" />

                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-outline-light  bg-success  text-light" href="">In stock</a>
                <a class="btn btn-outline-light  bg-secondary  text-light" href="{{route('cart')}}">Add to cart</a>
            </div>
            <h3><strong>Medicine Specifications</strong> </h3>
            <div>{{$medicine->specification}}</div>
        </div>

    
</div>

</div>
@endsection