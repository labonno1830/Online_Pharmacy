@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <h4>Suppliers Information</h4>
        <form action="{{route('suppliers')}}" method="POST" class="col-10 mx-2 my-2">
            @csrf

            <div class="col-5 mx-2 my-2">
                <label for="name" class="form-label text-dark">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name" for="name">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="phone" class="form-label text-dark">Phone Number</label>
                <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="email" class="form-label text-dark">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" for="email">
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
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Suppliers id</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $key=>$supplier)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->phone}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-primary" href="{{route('editsup',$supplier->id)}}" role="button"><i
                                        class="fa-solid fa-pen-nib"></i></a>
                            </div>
                            <div class="col">
                                <a class="btn btn-danger" href="{{route('delete_supplier',$supplier->id)}}"
                                    role="button"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </td>
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