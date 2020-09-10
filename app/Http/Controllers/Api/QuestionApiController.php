<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\Logic\QuestionRepository;

class QuestionApiController extends Controller
{
    public function renderQuestions()
    {
        $question = new QuestionRepository();
        return $question->getQuestionList();
    }
}