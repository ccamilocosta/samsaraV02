<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{ 

    public function showAll() {

        $articles = Article::all();
    
        return view('articles', ['articles' => $article]); 
    }
    
    public function createart(Request $request) {
        $article = new Article(); 
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save(); 
    
        return redirect('/articles');         
    }
    
    
    public function view($id) {
    
        $articles = Article::findOrFail($id); 
    
        return view('articleDetails', ['article' => $message]); 
    }
    
    public function delete($id) {

         $result = Article::findOrFail($id)->delete(); 
         return redirect('/articles'); 
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the articles table
        $articles = Article::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('dashboard', compact('articles'));
    }
    // public function newRequest(Request $request) {
        // $newRequest = $request-> input('acceptRequest')
        // return redirect('register', ['url' => 'register/route']);
    // }
}
