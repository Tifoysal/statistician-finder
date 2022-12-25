@extends('frontend.master')

@section('content')

    <div class="container mt-100">


        <div class="row">
            @if($searchResult->count()>0)
                @foreach($searchResult as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img src="{{url('/uploads/'.$data->avatar)}}" alt="Category">
                                </div>

                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$data->name}}</h4>
                            <p class="text-muted">Skills:  {{$data->skills}}</p>
                            <a class="btn btn-outline-primary btn-sm" href="{{route('statistician.view',$data->id)}}" data-abc="true">View Profile</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <img style="height: 500px;margin: auto" src="https://img.freepik.com/free-vector/no-data-concept-illustration_114360-536.jpg?w=2000" alt="">
                </div>

            @endif
        </div>
    </div>

@endsection
