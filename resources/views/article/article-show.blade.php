@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="max-width: 600px;">
            <img src="{{Storage::disk('image')->url($article->image)}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->text}}</p>
                <div class="d-flex justify-content-between">
                    <small>{{$article->author}}</small>
                    <small>{{$article->created_at}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
