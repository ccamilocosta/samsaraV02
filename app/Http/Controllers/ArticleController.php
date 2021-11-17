<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{ 

    public function showAll() {

        $articles = Article::all();
    
        return view('articles', ['articles' => $articles]); 
    }
    
    public function createart(Request $request) {
        $article = new Article(); 
        $article->title = $request->title;
        $article->description = $request->description;
        //$article->img_filename =$img_filename;
        $article->img_filename = $request->img_filename;
        $img_filename = null;
        if($request->hasFile('img_filename')){
        $img_filename = time() . '.' . $request->img_filename->extension(); 
        $img_filename = $request->img_filename->getClientOriginalName();
        //$request->img_filename->storeAs('img_articles',$img_filename,'public');
        $request()->update(['img_articles'=>$img_filename]);
        $article->save(); 
        //return redirect('/articles'); 
        return back()->with('img_articles', $img_filename);      
        }
    } 

    public function update(Request $request)
    {
        $path = $request->file('img_articles')->store('img_articles');

        return $path;
    }


    
    public function view($id) {
    
        $articles = Article::findOrFail($id); 
    
        return view('articleDetails', ['article' => $articles]); 
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
        // return redirect ('register', ['url' => 'register/route']);
    // }
}
