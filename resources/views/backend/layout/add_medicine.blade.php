@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <form action="{{route('medicines')}}" method="POST" enctype="multipart/form-data" class="row g-3">
      @csrf
      <h4>Add Medicine</h4>
      <div class="col-md-6">
        <label for="medicine_name" class="form-label text-dark">Medicine</label>
        <input class="form-control" type="text" name="medicine_name" for="medicine_name">
      </div>
      <div class="col-md-6">
        <label for="generic_name" class="form-label text-dark">Generic Name</label>
        <input class="form-control" type="text" name="generic_name" for="generic_name">
      </div>

      <div class="col-md-6">
        <label for="brand_name" class="form-label text-dark">Brand Name</label>
        <input class="form-control" type="text" name="brand_name" for="brand_name">
      </div>
      <div class="col-md-6">
        <label for="quantity" class="form-label text-dark">Quantity</label>
        <input class="form-control" type="text" name="quantity" for="quantity">
      </div>
      <div class="col-md-6">
        <label for="expiry_date" class="form-label text-dark">Expiry Date</label>
        <input class="form-control" type="date" name="expiry_date" for="expiry_date">
      </div>
      <div class="col-md-6">
        <label for="price" class="form-label text-dark">Price</label>
        <input class="form-control" type="text" name="price" for="price">
      </div>
      <div class="col-md-6">
      <label class="form-label text-dark">Supplier</label>
        <select class="form-select supplier" name="supplier" id="supplier">
          <option selected>select one</option>
          @foreach($suppliers as $key => $supplier)
          <option value="{{$supplier->id}}">{{$supplier->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-6">
        <label for="upload" class="form-label text-dark">Upload Image</label>
        <input type="file" class="form-control" name="upload" for="upload">
      </div>
      <div class="col-md-6">
        <label for="specification" class="form-label text-dark">Specification</label>
        <textarea class="form-control" type="text" name="specification" for="specification" rows="10"></textarea>
      </div>
      
      <div class="col-12 mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    <div class="my-4">
      <h4>Medicine List</h4>
      <table class="table bg-light mt-4">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Medicine</th>
            <th scope="col">Generic Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Expiry Date</th>
            <th scope="col">Price</th>
            <th scope="col">Specification</th>
            <th scope="col">Supplier</th>
            <th scope="col">Status</th>
            <th scope="col">Upload Image</th>
            <th scope="col">Action</th>
            <!-- <th scope="col">Action</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($medicines as $key=>$medicine)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$medicine->medicine_name}}</td>
            <td>{{$medicine->generic_name}}</td>
            <td>{{$medicine->brand_name}}</td>
            <td>{{$medicine->quantity}}</td>
            <td>{{$medicine->expiry_date}}</td>
            <td>{{$medicine->price}}</td>
            <td>{{$medicine->specification}}</td>
          <td>{{$medicine->supplier->name}}</td>
            <td>
              @if($medicine->status == 1 && $medicine->quantity != 0)

              <div class="col">
                <a class="btn btn-primary rounded-pill" href="#" role="button">Active</a>

              </div>
              @else
              <div class="col">

                <a class="btn btn-danger rounded-pill" href="#" role="button">Inctive</a>
              </div>
              @endif
            
            </td>
            <td>
              @if($medicine->upload !=null)
              <img src="{{asset('/uploads/medicine/'.$medicine->upload)}}" alt="" width="200" height="200">
              @endif
            </td>
            <td>
              {{$medicine->action}}
              <div class="row">
                <div class="col">
                  <a class="btn btn-primary" href="{{route('editmed',$medicine->id)}}" role="button"><i class="fa-solid fa-pen-nib"></i></a>
                </div>
                <div class="col">
                  <a class="btn btn-danger" href="{{route('deletemed',$medicine->id)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                </div>
              </div>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-12 mt-3">
      <a class="btn btn-primary reg" href="{{route('dashboard')}}">Back</a>
    </div>
  </div>
  @endsection