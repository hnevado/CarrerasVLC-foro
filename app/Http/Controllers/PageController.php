<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        $questions = Question::with('category','user')->latest()->get()->take(10);
        
        return view('pages.home', [
            'questions' => $questions,
        ]);
    }
}
