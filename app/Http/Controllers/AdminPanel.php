<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest\ArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminPanel extends Controller
{

    public function mainPanel()
    {
        return view('admin-panel');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('article/all-articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('article/addArticle', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CustomRequest\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create([
            'name' =>   $request->get('name'),
            'description'   =>  $request->get('description'),
            'short_description' =>  $request->get('short_description'),
            'article_slug'  =>  $request->get('name'),
        ]);

        $article->tags()->attach($request->get('article-tags'));

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $tags = Tag::all();

        $tagsForThanArticle = $article->tags;

        return view('article/editArticle', compact('article', 'tags', 'tagsForThanArticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        Article::whereId($id)->update(['name' => $request->get('article_name'), 'description' => $request->get('article_description'), 'short_description' => $request->get('article_short_description'), 'article_slug' => $request->get('article_name')]);

        $article =  Article::findOrFail($id);

        $article->tags()->sync($request->get('article-tags'));

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();
        return back();
    }
}
