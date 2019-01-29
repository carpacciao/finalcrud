@extends('adminlte::page')

@section('title', 'User Index')

@section('content_header')
    <h1>User Create</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-fw fa-user"></i></div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="name" placeholder="Name">
    </div>
    <br>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">&nbsp;@&nbsp;</div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="email" placeholder="Email">
    </div>
    <br>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-fw fa-lock"></i></div>
      </div>
      <input type="password" class="form-control" id="inlineFormInputGroupUsername" name="password" placeholder="Password">
    </div>
    <br>
    <button class="btn btn-success">Valider</button>
  </form>
</div>
@stop