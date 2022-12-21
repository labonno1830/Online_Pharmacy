@extends('backend.master')
@section('content')
<div class="listbody">
    <div class="container mt-5">
        <h4>Categories</h4>
        <form action="{{route('category')}}" method="POST" class="col-10 mx-2 my-2" >
            @csrf

            <div class="col-5 mx-2 my-2">
                <label for="name" class="form-label text-dark">Category</label>
                <input class="form-control" type="text" name="name" for="name">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="col-5 mx-2 my-4">
                <button type="submit" class="btn btn-primary  reg ">Add</button>
            </div>
        </form>

        <div class="my-4">
            <h4>Medicine List</h4>
            <table class="table bg-light mt-4">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($cat as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        <div class="col-12 mt-3">
            <a class="btn btn-primary reg" href="">Back</a>
        </div>
    </div>
</div>

</div>
@endsection