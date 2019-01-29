<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.article-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newarticle = new Article;
        $newarticle->title = $request->title;
        $newarticle->text = $request->text;
        $newarticle->author = Auth::user()->name;
        $newarticle->image = $request->image->store('', 'image');
        $newarticle->save();

        $articles = Article::all();
        return view('article.article', compact('articles'));        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.article-show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.article-edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->text = $request->text;
        $article->image = $request->image->store('', 'image');
        $article->save();

        $articles = Article::all();
        return view('article.article', compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        
        $articles = Article::all();
        return view('article.article', compact('articles'));
    }
}
