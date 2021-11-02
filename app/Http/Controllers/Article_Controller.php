<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article_Controller extends Controller
{
    public function showAll()
    {
        return view('/articles' [
            ->middleware(['auth'])->name('articles')  
        ])  
    };

    