@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
    <h1>Article <a href="{{route('article.create')}}" class="btn btn-success btn-sm">create</a></h1>
@stop

@section('content')
<div class="container">
  <div class="row">
    @foreach ($articles as $article)
    <div class="col-6">
      <div class="card" style="">
        <form class="delete" action="{{route('article.destroy',['article' => $article->id])}}" method="POST">@csrf @method('DELETE')<button class="btn btn-danger btn-sm"><i class="fa fa-fw fa-times"></i></button></form>
        <a href="{{route('article.edit', ['article' => $article->id])}}" class="btn edit btn-warning btn-sm text-white"><i class="fa fa-fw fa-pencil"></i></a>
        <img src="{{Storage::disk('image')->url($article->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->text}}</p>
          <div class="d-flex justify-content-between">
            <small>{{$article->author}}</small>
            <small><a href="{{route('article.show', ['article' => $article->id])}}">voir l'article</a></small>
            <small>{{$article->created_at}}</small>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@stop