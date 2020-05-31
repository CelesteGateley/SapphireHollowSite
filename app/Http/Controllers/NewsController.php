<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        return view('pages.home');
    }

    public function create() {
        return view('pages.news.create');
    }

    public function store(Request $request) {
        $news = News::create([
            'title' => $request->input('title'),
            'body' => $request->input('news-trixFields')['body'],
        ]);
        return redirect()->route('view_news', ['news' => $news]);
    }

    public function show(News $news) {
        return view('pages.news.view', ['news' => $news]);
    }

    public function edit(News $news) {
        return view('pages.news.edit', ['news' => $news]);
    }

    public function update(Request $request, News $news) {
        $news->update([
            'title' => $request->input('title'),
            'body' => $request->input('news-trixFields')['body'],
        ]);
        return redirect()->route('view_news', ['news' => $news]);
    }

    public function destroy(News $news) {
        $news->delete();
    }
}
