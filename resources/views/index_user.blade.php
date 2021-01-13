@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Manajemen User</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>AKSI</th>
                </tr>

                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('users.edit', $user->id)}}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{route ('users.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection