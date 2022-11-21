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
        <!-- <th scope="col">Action</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($odr as $key=>$orderlist)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$orderlist->name}}</td>
        <td>{{$orderlist->phone}}</td>
        <td>{{$orderlist->address}}</td>
        <td>{{$orderlist->total}}</td>
        <td></td>
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