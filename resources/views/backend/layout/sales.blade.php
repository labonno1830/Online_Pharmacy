@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <h4>Total Sales</h4>
    <table class="table bg-light mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Total Quantity</th>
        <th scope="col">Total Amount</th>
        <th scope="col">Stock Out</th>
        <th scope="col">Sold items</th>
        <th scope="col">Paid Amount</th>
        <th scope="col">Delivery</th>
        <!-- <th scope="col">Action</th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><span class="badge p-2 rounded-pill text-bg-primary">Done</span></td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><span class="badge p-2 rounded-pill text-bg-danger">Pending</span></td>
        
      </tr>
      <tr>
        <th scope="row">3</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="col-12 mt-3">
    <a class="btn btn-primary reg" href="{{route('dashboard')}}">Back</a>  
  </div>
</div>
</div>
@endsection  