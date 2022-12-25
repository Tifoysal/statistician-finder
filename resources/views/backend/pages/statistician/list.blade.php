@extends('backend.master')

@section('content')



    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Highest Degree</th>
            <th scope="col">Campus</th>
            <th scope="col">Skills</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $data)

        <tr>
            <th scope="row">{{$data->id}}
            <td>
                <img src="{{url('/uploads/'.$data->avatar)}}" alt="Image">
            </td>
            <td>{{$data->name}}</td>
            <td>{{$data->role}}</td>
            <td>{{$data->highest_degree}}</td>
            <td>{{$data->campus}}</td>
            <td>{{$data->skills}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection
