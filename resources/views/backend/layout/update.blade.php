@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <form action="{{route('updatemed',$med->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$med->id}}">
            <h4>Update Medicine</h4>
            <div class="col-md-6">
                <label for="medicine_name" class="form-label text-dark">Medicine</label>
                <input class="form-control" type="text" name="medicine_name" for="medicine_name"
                    value="{{$med->medicine_name}}">
                <span class="text-danger">
                    @error('medicine_name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="generic_name" class="form-label text-dark">Generic Name</label>
                <input class="form-control" type="text" name="generic_name" for="generic_name"
                    value="{{$med->generic_name}}">
                <span class="text-danger">
                    @error('generic_name')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-md-6">
                <label for="brand_name" class="form-label text-dark">Brand Name</label>
                <input class="form-control" type="text" name="brand_name" for="brand_name" value="{{$med->brand_name}}">
                <span class="text-danger">
                    @error('brand_name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="quantity" class="form-label text-dark">Quantity</label>
                <input class="form-control" type="text" name="quantity" for="quantity" value="{{$med->quantity}}">
                <span class="text-danger">
                    @error('quantity')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="expiry_date" class="form-label text-dark">Expiry Date</label>
                <input class="form-control" type="date" name="expiry_date" for="expiry_date"
                    value="{{$med->expiry_date}}">
                <span class="text-danger">
                    @error('expiry_date')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label text-dark">Price</label>
                <input class="form-control" type="text" name="price" for="price" value="{{$med->price}}">
                <span class="text-danger">
                    @error('price')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Supplier</label>
                <select class="form-select supplier" name="supplier" id="supplier" value="{{$med->supplier}}">
                    <option selected>select one</option>
                    @foreach($suppliers as $key => $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('supplier')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="upload" class="form-label text-dark">Upload Image</label>
                <input type="file" class="form-control" name="upload" for="upload">
                <span class="text-danger">
                    @error('upload')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label for="specification" class="form-label text-dark">Specification</label>
                <textarea class="form-control" type="text" name="specification" for="specification" rows="10">
                    {{$med->specification}}
                </textarea>
                <span class="text-danger">
                    @error('specification')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-6">
                <label class="form-label text-dark">Category</label>
                <select class="form-select" name="category">
                    <option selected>select one</option>
                    @foreach($cat as $key =>$category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('category')
                    {{$message}}
                    @enderror
                </span>
            </div>


            <div class="col-md-6">
                <img src="{{'/uploads/medicine/'.$med->upload}}">
            </div>
            <div class="col-12 mt-2">
                <button class="btn btn-primary profile-button" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection