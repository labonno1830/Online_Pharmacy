@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        
        <form action="{{route('updatesup',$suppl->id)}}" method="POST" class="col-10 mx-2 my-2">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$suppl->id}}">
            <h4>Update Supplier</h4>

            <div class="col-5 mx-2 my-2">
                <label for="name" class="form-label text-dark">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name" for="name" value="{{$suppl->name}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="phone" class="form-label text-dark">Phone Number</label>
                <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone" value="{{$suppl->phone}}">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="email" class="form-label text-dark">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" for="email" value="{{$suppl->email}}">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-5 mx-2 my-4">
                <button type="submit" class="btn btn-primary  reg ">Add</button>
            </div>
        </form>
        
@endsection