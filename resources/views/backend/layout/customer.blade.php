@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <h4>Customer list</h4>
    <table class="table bg-light mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <!-- <th scope="col">Image</th> -->
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        <!-- <th scope="col">Action</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($users as $key=>$customer)
    @if($customer->role_id==2)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->phone}}</td>
       
      </tr>
      @endif
    @endforeach
    </tbody>
  </table>
  <div class="col-12 mt-3">
    <a class="btn btn-primary reg" href="{{route('dashboard')}}">Back</a>  
  </div>
</div>
</div>
@endsection      