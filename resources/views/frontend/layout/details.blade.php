@extends('Frontend.master')
@section('content')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    body {
        overflow: scroll;
        /* Show scrollbars */
    }
</style>
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
                        <span>
                            Quantity
                        </span>
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 50px;" />

                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- <a class="btn btn-outline-light  bg-success  text-light" href="">In stock</a> -->
                @if(Auth::user())
                <a class="btn btn-outline-light  bg-secondary  text-light" href="{{route('addtocart',$medicine->id)}}">Add to cart</a>
                @else
                <a class="btn btn-outline-light  bg-secondary  text-light" disabled href="#">Add to cart</a>
                @endif

            </div>
            <h3><strong>Medicine Specifications</strong></h3>
            <div>{{$medicine->specification}}</div>
        </div>

        


    </div>

</div>
@endsection