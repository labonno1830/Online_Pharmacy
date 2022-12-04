@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <h4>Doctors Information</h4>
        <form action="{{route('doctors')}}" method="POST" class="col-10 mx-2 my-2">
            @csrf

            <div class="col-5 mx-2 my-2">
                <label for="name" class="form-label text-dark">Name</label>
                <input class="form-control" type="text" name="name" for="name">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Department</label>
                <select class="form-select" name="department">
                    <option selected>select one</option>
                    <option>Cardiologists</option>
                    <option>Dermatologists</option>
                    <option>Gynecologists</option>
                    <option>Endocrinologists</option>
                    <option>Gastroenterologists</option>
                    <option>Neurologists</option>
                </select>
            </div>
            <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Hospital</label>
                <select class="form-select" name="hospital">
                    <option selected>select one</option>
                    <option>Popular Diagnostics Center Ltd. (Uttara Branch)</option>
                    <option>Ibn Sina Diagnostic & Consultation Centre, Uttara</option>
                    <option>LABAID Diagnostic Uttara-02</option>
                </select>
            </div>
            
            <div class="col-5 mx-2 my-2">
                <label for="phone" class="form-label text-dark">Helpline</label>
                <input class="form-control" type="tel" name="phone" for="phone">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="col-5 mx-2 my-2">
                <label for="time" class="form-label text-dark">Consultation Time</label>
                <input class="form-control" type="text" name="time" for="time">
                <span class="text-danger">
                    @error('time')
                    {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="col-5 mx-2 my-2">
                <label class="form-label text-dark">Consultation Days</label>
                <select class="form-select" name="days">
                    <option selected>select one</option>
                    <option>Sat-Sun-Mon</option>
                    <option>Tues-Wed-Thurs</option>
                    <option>Sat-Mon-Wed</option>
                    <option>Sun-Tues-Thurs</option>
                </select>
            </div>
            <div class="col-5 mx-2 my-4">
                <button type="submit" class="btn btn-primary  reg ">Add</button>
            </div>
        </form>

        <h4>Doctors list</h4>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Helpline</th>
                    <th scope="col">Consultation Time</th>
                    <th scope="col">Consultation Days</th>

                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $key=>$doctor)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->department}}</td>
                    <td>{{$doctor->hospital}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->time}}</td>
                    <td>{{$doctor->days}}</td>
                    <td>
                        <div class="col">
                            <a class="btn btn-danger" href="{{route('delete_doctor',$doctor->id)}}" role="button"><i
                                    class="fa-solid fa-trash"></i></a>
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