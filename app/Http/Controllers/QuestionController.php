<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function show(Question $question) //consulta
    {
        $question->load('answers', 'category', 'user'); //carga las relaciones de answer, category y user
        return view('questions.show', [
            'question' => $question
        ]);
    }

}
