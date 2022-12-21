@extends('Frontend.master')
@section('content')

<div class="container rounded bg-white py-3 ">
    <div class="row">
        @if($users)
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center ">
                @if($users->upload != null)
                <img class="rounded-circle mt-5" width="150px" src="{{asset('/uploads/profile/'.$users->upload)}}"
                    alt="" width="200" height="200">
                @endif
                <span class="font-weight-bold"><strong>Name:</strong> {{$users->name}}</span>
                <span class="text-black-50"><strong>Email:</strong> {{$users->email}}</span>
                <span class="text-black-50"><strong>Phone:</strong> {{$users->phone}}</span>
            </div>
            <div class="d-flex flex-column align-items-center text-center">
                <a class="btn btn-primary" href="{{route('edituser',$users->id)}}" role="button"><i
                        class="fa-solid fa-pen-nib"></i> Edit User Profile</a>
            </div>
        </div>
        @endif
        <div class="col-md-8 border-right">
            <div class="listbody">
                <div class="container mt-5">
                    <h4>Order Information</h4>
                    <table class="table bg-light">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">sub_orderlist</th>
                                <th scope="col">Status</th>
                                <th scope="col">Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key=>$order)
                            @if($order->name == $users->name)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td><a href="{{route('user_sub_orders', $order->id)}}" class="btn btn-success">view</a>
                                </td>
                                <td>
                                    @if($order->status == 0)
                                    <span class="badge rounded-pill text-bg-danger">Pending</span>
                                    @else
                                    <span class="badge rounded-pill text-bg-primary">Done</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('cus_invoice', $order->id)}}" class="btn btn-success">view</a>

                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-12 mt-3">
                        <a class="btn btn-primary reg" href="{{route('homepage')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection