@extends('adminlte::page')

@section('title', 'Article Edit')

@section('content_header')
    <h1>Article Edit</h1>
@stop

@section('content')
<div class="container">
    <form action="{{route('article.update', ['article' => $article->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="">Text</label>
            <textarea name="text" name="text" id="" cols="30" rows="10" class="form-control">{{$article->text}}</textarea>
        </div>
        <img style="float: left; max-width: 100%" src="{{Storage::disk('image')->url($article->image)}}" alt="">
        <div style="float: left;" class="form-group mx-3">
            <label for="">image</label>
            <input type="file" class="form-control-file" id="inlineFormInputGroupUsername" name="image" placeholder="Password">
        </div>
        <div class="clearfix"></div>
        <button class="btn btn-success mt-3">Valider</button>
    </form>
</div>
@stop