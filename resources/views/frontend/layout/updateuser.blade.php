@extends('Frontend.master')
@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <form action="{{route('updateuser',$cus->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$cus->id}}">
            <h4 class="text-right">Edit Profile</h4>

            

            <div class="col-md-10">
                <label for="phone" class="form-label text-dark">Phone Number</label>
                <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" for="phone" value="{{$cus->phone}}">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class=" col-md-10">
                <label for="email" class="form-label text-dark">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" for="email" value="{{$cus->email}}">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
          
            <div class=" col-md-10">
                <label for="upload" class="form-label text-dark">Upload Image</label>
                <input type="file" class="form-control" name="upload" for="upload">
                <span class="text-danger">
                    @error('upload')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-md-10">
                <img style="height: 100px; width: 100px;" src="{{'/uploads/profile/'.$cus->upload}}">
            </div>

            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>
    


</form>
</div>
</div>
@endsection