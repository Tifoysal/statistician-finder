@extends('frontend.master')
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{$user->name}}</span>
                    <span class="text-black-50">{{$user->email}}</span>

                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
{{--                    <form action="{{route('profile.update')}}" method="post">--}}

{{--                        @method('put')--}}
{{--                        @csrf--}}
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input readonly name="user_name" type="text" class="form-control" placeholder="Name" value="{{$user->name}}"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input readonly name="user_mobile" type="text" class="form-control"  value="{{$user->mobile}}"></div>
                        <div class="col-md-12"><label class="labels">Address Line 1</label><input readonly name="user_address" type="text" class="form-control"  value="{{$user->address}}"></div>
                        <div class="col-md-12"><label class="labels">Skills</label><input readonly type="text" class="form-control"  value="{{$user->skills}}"></div>
                        <div class="col-md-12"><label class="labels">Campus</label><input readonly type="text" class="form-control"  value="{{$user->campus}}"></div>
                        <div class="col-md-12"><label class="labels">Highest Degree</label><input readonly type="text" class="form-control"  value="{{$user->highest_degree}}"></div>
                       </div>

                    <div class="mt-5 text-center">
                        <a class="btn btn-primary profile-button" href="{{route('home')}}">Back</a>
                    </div>
{{--                    </form>--}}


                </div>
            </div>

        </div>
    </div>

@endsection
