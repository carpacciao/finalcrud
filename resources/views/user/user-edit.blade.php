@extends('adminlte::page')

@section('title', 'User Index')

@section('content_header')
    <h1>User Edit</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('user.update', ['user' => $user->id])}}" method="POST">
    @method('PUT')
    @csrf
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-fw fa-user"></i></div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="name" value="{{$user->name}}">
    </div>
    <br>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">&nbsp;@&nbsp;</div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="email" value="{{$user->email}}">
    </div>
    <br>
    <br>
    <button class="btn btn-success">Valider</button>
  </form>
</div>
@stop