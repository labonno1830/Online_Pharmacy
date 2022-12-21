@extends('Frontend.master')
@section('content')
<section class="h-100 h-custom">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <form action="{{route('cart_order')}}" method="post">
                @csrf
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Item name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($cart as $data)
                                <tr>
                                    <th>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('uploads/medicine/'.$data->options->upload)}}" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;">{{$data->name}}</p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                        <form action=""></form> 
                                        <form action="{{route('qtyUpdate')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="row_id" value="{{$data->rowId}}">
                                             <input id="quantity" name="quantity" value="{{$data->qty}}" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                             
                                            <button type="submit" class="btn btn-light"><i class="fa-solid fa-rotate-right"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;"> ৳{{$data->price}} </p>
                                    </td>
                                    @php
                                    $total=$data->price*$data->qty;
                                    @endphp
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;"> ৳{{$total}} </p>
                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-danger" href="{{route('deleteodr',$data->rowId)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                @if(Auth::user())
                                <div class="col-md-4 ">
                                    <div class="row-5 mx-2 my-2">
                                        <label for="name" class="form-label text-dark">Name</label>
                                        <input class="form-control" type="text" name="name" readonly value="{{Auth::user()->name}}" placeholder="Enter your name" for="name">
                                    </div>

                                    <div class="row-5 mx-2 my-2">
                                        <label for="phone" class="form-label text-dark">Phone Number</label>
                                        <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone" value="{{Auth::user()->phone}}">
                                    </div>

                                    <div class="row-5 mx-2 my-2">
                                        <label for="address" class="form-label text-dark">Address</label>
                                        <input class="form-control" type="text" name="address" placeholder="Enter your address" for="address" required>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-4 ">
                                    <div class="row-5 mx-2 my-2">
                                        <label for="name" class="form-label text-dark">Name</label>
                                        <input class="form-control" type="text" name="name" readonly  placeholder="Enter your name" for="name">
                                    </div>

                                    <div class="row-5 mx-2 my-2">
                                        <label for="phone" class="form-label text-dark">Phone Number</label>
                                        <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone">
                                    </div>

                                    <div class="row-5 mx-2 my-2">
                                        <label for="address" class="form-label text-dark">Address</label>
                                        <input class="form-control" type="text" name="address" placeholder="Enter your address" for="address" required>
                                    </div>
                                </div>
                                @endif
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-between " style="font-weight: 500;">
                                        <p class="mb-2">Subtotal</p>
                                        <p class="mb-2">৳ {{Cart::subtotal()}}</p>
                                    </div>

                                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                                        <p class="mb-0">Shipping</p>
                                        <p class="mb-0">৳ 50.00</p>
                                    </div>

                                    <hr class="my-4">
                                    @php
                                    $grand_total = (float)str_replace(',','',Cart::subtotal());
                                    @endphp
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Grand Total</p>
                                        <p class="mb-2">৳ {{$grand_total+50}}</p>
                                    </div>
                                    @if(Auth::user())
                                    <div>
                                        <button type="submit" class="btn btn-primary"> Place order ৳{{$grand_total+50}}</button>
                                    </div>
                                   @else
                                    <div>
                                        <a href="{{route('login')}}" class="btn btn-primary"> login first for checkout</a>
                                    </div>
                                   @endif
                                </div>

                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection