<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class IndexController extends Controller
{
    public function index()
    {
        $game1 = 'Бот';
        $game2 = 'Плейер';
        
        $tasks = Task::All();


        //dump($tasks);
        return view('main')->with(['tasks'=>$tasks]);
    }
    public function oneTask($id)
    {
        $task = Task::find($id);
        //dump($tasks);
        dump($task->body);
        return view('task')->with(['task'=>$task]);
    }
    // public function add()
    // {
    //    // dump($_POST);
    //     return view('add');
    // }
    // public function store(Request $request)
    // {
    //     $this->validate($request, 
    //     [
    //                 'title' => 'required|max:255|unique:articles',
    //                 'text' => 'required'
    //     ]);   
        
        
    //     $data = $request->all();

    //     $article = new Article;
    //     $article->fill($data);

    //     $article->save();
        
            
       
    //     return redirect('/');
    // }
}
