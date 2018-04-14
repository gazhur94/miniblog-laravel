<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    public function index()
    {
        $game1 = 'Бот';
        $game2 = 'Плейер';

        $articles = Article::select(['title'])->first();


        //dump($articles);
        return view('main')->with(['game1'=>$game1, 'game2'=>$game2, 'articles'=>$articles]);
    }
    public function add()
    {
       // dump($_POST);
        return view('add');
    }
    public function store(Request $request)
    {
        $this->validate($request, 
        [
                    'title' => 'required|max:255|unique:articles',
                    'text' => 'required'
        ]);   
        
        
        $data = $request->all();

        $article = new Article;
        $article->fill($data);

        $article->save();
        
            
       
        return redirect('/');
    }
}
