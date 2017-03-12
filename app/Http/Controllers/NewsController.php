<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;

class NewsController extends Controller
{
    public function index() 
    {
    	$news = News::orderBy('created_at', 'desc')
    							->get();
    	return view('admin.news.index', compact('news'));
    }

    public function create() 
    {
    	return view('admin.news.create');
    }

    public function edit(News $news) 
    {
    	return view('admin.news.edit', compact('news'));
    }

    public function editSave(News $news, Request $request) 
    {

    	$results = $request->all();
    	
    	$news->title = $request->title;

    	if(preg_match('/class="([a-zA-Z-]*)"/', $results['text'])) {
            $text = preg_replace('/class="([a-zA-Z-]*)"/', 'class="img-responsive"', $results['text']);
        } else {
            $text = str_replace("<img", "<img class='img-responsive'", $results['text']);
        }

    	$news->text = $text;
    	$news->save();
    	return view('admin.news.edit', compact('news'));
    }

    public function delete(News $news)
    {
    	$news->delete();
    	return redirect('admin/news/index');
    }
}
