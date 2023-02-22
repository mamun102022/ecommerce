@extends('adminPanel.master')

@section('title')
    Update User
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Password</h3></div>
                    <div class="card-body">
                        <form action="{{route('update.user')}}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input class="form-control" name="name" value="{{$user->name}}" type="text"
                                       placeholder="Name"/>
                                <label>Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" value="{{$user->email}}" type="text"
                                       placeholder="Email"/>
                                <label>Email</label>
                            </div>

                            @if(Auth::user()->id == $user->id )
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="password" type="text"
                                           placeholder="Password"/>
                                    <label>Password</label>
                                </div>
                            @endif

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
