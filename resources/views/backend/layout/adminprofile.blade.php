@extends('Backend.master')
@section('content')

<div class="container rounded bg-white py-3 ">
    <div class="row">

        @foreach($users as $key=>$user)
        @if($user->role_id==1)
        <div class="col-md-12 border-right">
            <div class="d-flex flex-column align-items-center text-center ">
                @if($user->upload != null)
                <img class="rounded-circle mt-5" width="150px" src="{{asset('/uploads/profile/'.$user->upload)}}" alt=""
                    width="200" height="200">
                @endif
                <span class="font-weight-bold"><strong>Name:</strong> {{$user->name}}</span>
                <span class="text-black-50"><strong>Email:</strong> {{$user->email}}</span>
                <span class="text-black-50"><strong>Phone:</strong> {{$user->phone}}</span>
            </div>
            <div class="d-flex flex-column align-items-center text-center">
                <a class="btn btn-primary" href="{{route('edituser',$user->id)}}" role="button"><i class="fa-solid fa-pen-nib"></i> Edit User Profile</a>
            </div>
        </div>

        @endif
        @endforeach
    </div>
</div>
@endsection