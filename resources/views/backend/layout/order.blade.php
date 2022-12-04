@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <h4>Order list</h4>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <!-- <th scope="col">Invoice No</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total</th>
                    <th scope="col"> Delivery Status</th>
                    <th>Sub-orderlist</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($odr as $key=>$orderlist)
                <tr>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$orderlist->name}}</td>
                    <td>{{$orderlist->phone}}</td>
                    <td>{{$orderlist->address}}</td>
                    <td>{{$orderlist->total}}</td>
                    <td>
                      <span class="badge rounded-pill text-bg-primary">Done</span>
                      <span class="badge rounded-pill text-bg-danger">Pending</span>
                    </td>
                    <td><a href="{{route('sub_order', $orderlist->id)}}" class="btn btn-success">view</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-12 mt-3">
            <a class="btn btn-primary reg" href="{{route('dashboard')}}">Back</a>
        </div>
    </div>
</div>
@endsection