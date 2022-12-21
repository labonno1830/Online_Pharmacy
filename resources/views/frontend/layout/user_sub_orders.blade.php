@extends('Frontend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <h4>Sub-order list</h4>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <!-- <th scope="col">Invoice No</th> -->
                    <th scope="col">Medicine Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($sub as $key=>$sub_orderlist)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$sub_orderlist->med_name}}</td>
                    <td>{{$sub_orderlist->price}}</td>
                    <td>{{$sub_orderlist->quantity}}</td>
                    
                </tr>
                @endforeach
                
                <tr>
                    <th colspan="2" class="text-right">Sub Total:</th>
                    <td colspan="2" class="text-left">{{$sub_orderlist->sub_total}} ৳</td>
                </tr>
               
            </tbody>
        </table>
        <div class="col-12 mt-3">
            <a class="btn btn-primary reg" href="{{route('userdashboard')}}">Back</a>
        </div>
    </div>
</div>
@endsection