<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class UserPanel extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('welcome', compact('categories'), compact('tags'));
    }

    public function showCategory(Category $category)
    {
        $articles = $category->articles;

        return view('category/userCategory', compact('articles', 'category'));
    }

    public function showArticle(Article $article)
    {
        $tags = $article->tags;

        return view('article/userArticle', compact('article', 'tags'));
    }

    public function showTag(Tag $tag)
    {
        $articles = $tag->articles;

        return view('tag/userTag', compact('articles', 'tag'));
    }
}
