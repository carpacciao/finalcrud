@extends('adminlte::page')

@section('title', 'User Index')

@section('content_header')
    <h1>User Show</h1>
@stop

@section('content')
<div class="container">
  <ul class="list-group">
  <li class="list-group-item">{{$user->name}}</li>
  <li class="list-group-item">{{$user->email}}</li>
  <li class="list-group-item">{{$user->password}}</li>
  <li class="list-group-item">{{$user->created_at}}</li>
  <li class="list-group-item">{{$user->updated_at}}</li>
</ul>
</div>
@stop