@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
       
        <form action="{{route('updatedoc',$doct->id)}}" method="POST" class="col-10 mx-2 my-2">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$doct->id}}">
            <h4>Update Doctor</h4>
            <div class="col-5 mx-2 my-2">
                <label for="name" class="form-label text-dark">Name</label>
                <input class="form-control" type="text" name="name" for="name" value="{{$doct->name}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Department</label>
                <select class="form-select" name="cate_id"  value="{{$doct->cate_id}}">
                    <option value="" selected>select one</option>
                    @foreach($cate as $categories)
                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('cate_id')
                    {{$message}}
                    @enderror
                </span>
                </select>
            </div>
            <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Hospital</label>
                <select class="form-select" name="hospital"  value="{{$doct->hospital}}">
                    <option selected>select one</option>
                    <option >Popular Diagnostics Center Ltd. (Uttara Branch)</option>
                    <option>Ibn Sina Diagnostic & Consultation Centre, Uttara</option>
                    <option>LABAID Diagnostic Uttara-02</option>
                    <option>Square Hospital</option>
                </select>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="phone" class="form-label text-dark">Helpline</label>
                <input class="form-control" type="tel" name="phone" for="phone"  value="{{$doct->phone}}">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="col-5 mx-2 my-2">
                <label for="time" class="form-label text-dark">Consultation Time</label>
                <input class="form-control" type="text" name="time" for="time"  value="{{$doct->time}}">
                <span class="text-danger">
                    @error('time')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-5 mx-2 my-2">
                <label for="days" class="form-label text-dark">Consultation Days</label>
                <input class="form-control" type="text" name="days" for="days"  value="{{$doct->days}}">
                <span class="text-danger">
                    @error('days')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <!-- <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Consultation Days</label>
                <select class="form-select" name="days">
                <option selected>select one</option>
                    <option>Sat-Sun-Mon</option>
                    <option>Tues-Wed-Thurs</option>
                    <option>Sat-Mon-Wed</option>
                    <option>Sun-Tues-Thurs</option>
                </select>
            </div> -->
            <div class="col-5 mx-2 my-4">
                <button type="submit" class="btn btn-primary  reg ">Add</button>
            </div>
        </form>

        
@endsection