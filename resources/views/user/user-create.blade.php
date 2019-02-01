@extends('adminlte::page')

@section('title', 'User Index')

@section('content_header')
<h1>User Create</h1>
@stop

@section('content')


{{-- @if($errors->has('name'))
@foreach ($errors->get('name') as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif --}}

<div class="container">
    @if($errors->any())
    <div class="alert alert-danger px-5">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-fw fa-user"></i></div>
            </div>
            <input type="text" class="form-control {{$errors->has('name')? 'border-danger' : '' }}" id="inlineFormInputGroupUsername"
                name="name" value="{{old('name')}}" placeholder="Name">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">&nbsp;@&nbsp;</div>
            </div>
            <input type="text" value="{{ old('email') }}" class="form-control {{$errors->has('email')? 'border-danger' : '' }}" id="inlineFormInputGroupUsername" name="email" placeholder="Email">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-fw fa-lock"></i></div>
            </div>
            <input type="password" class="form-control {{$errors->has('password')? 'border-danger' : '' }}" id="inlineFormInputGroupUsername" name="password" placeholder="Password">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-fw fa-lock"></i></div>
            </div>
            <input type="password" class="form-control {{$errors->has('password')? 'border-danger' : '' }}" id="inlineFormInputGroupUsername" name="password_confirmation" placeholder="Password">
        </div>
        <br>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-fw fa-user"></i></div>
          </div>
          <select class="custom-select" name="role">
            @foreach ($roles as $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
          </select>
        </div>
        <br>
        <button class="btn btn-success">Valider</button>
    </form>
</div>
@stop
