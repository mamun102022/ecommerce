@extends('adminPanel.master')

@section('title')
    Dashboard - User
@endsection

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage User</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable : User
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    @php $i=1; @endphp
                    @foreach($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{route('delete.user')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure delete this?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
