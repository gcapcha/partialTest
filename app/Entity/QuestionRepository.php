<?php
namespace App\Entity;

use App\Models\Question;

class QuestionLogic
{
    #private functions
    #public functions
    public function getQuestionList()
    {
        $list = Question::select(Question::TABLE_NAME . '.*')
        ->get();
        return $list;
    }
}