<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;
use Redirect;

class ArticleController extends Controller
{ 

    public function showAll() {

        $articles = Article::all();
    
        return view('articles', ['articles' => $articles]); 
    }
    
    public function createart(Request $request) {
        // validate title and description (may not be empty)
        $request->validate([
            'title' => 'required|max:1024',
            'description' => 'required|max:64000'
        ]);

        // creating a new article copy values from the request into that article object
        $article = new Article(); 
        $article->title = $request->title;
        $article->description = $request->description;

        if ($request->img_filename) {
            /* image optional; if given, it must be a valid image file (check extension)
            $request->validate ([
                'img_filename' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            */

            // create a new file name and store the file
            $img_filename = time() . '.' . $request->img_filename->extension(); 
            $request->img_filename->move(public_path('img_articles'), $img_filename);     
        }
        else $img_filename = '';

        // set and save the article 
        $article->img_filename = $img_filename;
        $article->save();

        // return to the list of articles
        return Redirect::route('articles');
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
