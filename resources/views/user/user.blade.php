@extends('adminlte::page')

@section('title', 'User Index')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="6">
          <a href="{{route('user.create')}}" class="btn btn-success d-block">Ajouter un user</a>
        </td>
      </tr>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}} **{{$user->role->name}}**</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="{{route('user.show', ['user' => $user->id])}}" class="btn btn-primary btn-sm">show</a>
                    <a href="{{route('user.edit', ['user' => $user->id])}}" class="btn btn-warning btn-sm text-white">edit</a>
                    <form action="{{route('user.destroy', ['user' => $user->id])}}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop