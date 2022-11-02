@extends('backend.master')
@section('content')
<div class="listbody">
  <div class="container mt-5">
    <form  action="{{route('medicines')}}" method="POST" class="row g-3">
    @csrf
    <h4>Update Medicine</h4>
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
    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </form>
  </div>
</div>
@endsection  