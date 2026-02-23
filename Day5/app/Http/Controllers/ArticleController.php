<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:255',
            'category_id' => 'required'
        ]);
        $validated['user_id'] = Auth::id();
        Article::create($validated);

        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

        return view('read', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = category::all()->where('id', '!=', $article->category_id);
        return view('edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:255',
            'category_id' => 'required'
        ]);


        $article->update($validated);


        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        $article->delete();

        return redirect()->route('article.index');
    }
}
