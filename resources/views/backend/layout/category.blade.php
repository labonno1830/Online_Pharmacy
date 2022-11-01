@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <form  action="{{route('medicines')}}" method="POST" class="row g-3">
    @csrf
    <h4>Add Medicine</h4>
      <div class="col-md-6">
      <label for="medicine_name" class="form-label text-dark">Medicine</label>
      <input class="form-control" type="text" name="medicine_name" for="medicine_name">
      </div>
      <div class="col-md-6">
        <label for="generic_name" class="form-label text-dark">Generic Name</label>
        <input  class="form-control" type="text" name="generic_name" for="generic_name">
      </div>
   
    <div class="col-md-6">
        <label for="brand_name" class="form-label text-dark">Brand Name</label>
        <input  class="form-control" type="text" name="brand_name" for="brand_name">
    </div>
    <div class="col-md-6">
        <label for="quantity" class="form-label text-dark">Quantity</label>
        <input  class="form-control" type="text" name="quantity" for="quantity">
    </div>
    <div class="col-md-6">
        <label for="expiry_date" class="form-label text-dark">Expiry Date</label>
        <input class="form-control" type="date" name="expiry_date" for="expiry_date" >
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label text-dark">Price</label>
        <input class="form-control" type="text" name="price" for="price" >
    </div>
    <div class="col-md-6">
        <label for="specification" class="form-label text-dark">Specification</label>
        <input class="form-control" type="text" name="specification" for="specification" >
    </div>
    <div class="col-md-6">
      <label for="upload" class="form-label text-dark">Upload Image</label>
      <input type="file" class="form-control" name="upload" for="upload" >
    </div>
    <!-- <div class="col-md-6 my-4">
      <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
      <select class="form-select" id="inlineFormSelectPref">
        <option selected>Active</option>
        <option value="1">Inactive</option>
      </select>
    </div> -->
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
        <th scope="col">Status</th>
        <th scope="col">Upload Image</th>
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
        <!-- <td>{{$medicine->upload}}</td> -->
      </tr>
      @endforeach
      <!-- <tr>
        <th scope="row">2</th>
        <td></td>
        <td>Fexo</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td></td>
        <td>Napa</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> -->
    </tbody>
  </table>
  </div>
  <div class="col-12 mt-3">
    <a class="btn btn-primary reg" href="{{route('dashboard')}}">Back</a>  
  </div>
</div> 
@endsection


    