@extends('backend.master')
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
        <th scope="col">Sub total</th>
        <!-- <th scope="col">Action</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($sub as $sub_orderlist)
      <tr>
        <td>{{$sub_orderlist->med_name}}</td>
        <td>{{$sub_orderlist->price}}</td>
        <td>{{$sub_orderlist->quantity}}</td>
        <td>{{$sub_orderlist->sub_total}}</td>
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