@extends('adminlte::page')

@section('title', 'Article Create')

@section('content_header')
<h1>Article Create</h1>
@stop

@section('content')
<div class="container">
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="title" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="">Text</label>
            <textarea name="text" name="text" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">image</label>
            <input type="file" class="form-control-file" id="inlineFormInputGroupUsername" name="image" placeholder="Password">
        </div>
        <button class="btn btn-success">Valider</button>
    </form>
</div>
@stop