@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <h4>Order list</h4>
    <table class="table bg-light mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Invoice No</th>
        <th scope="col">User</th>
        <th scope="col">Payment Type</th>
        <th scope="col">Payment Status</th>
        <th scope="col">Total Payable</th>
        <th scope="col"> Delivery Status</th>
        <th scope="col">Action</th>
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
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2"></td>
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