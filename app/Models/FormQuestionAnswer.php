<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormQuestionAnswer extends Model
{

    protected $fillable = [
        'form_question_id',
        'answer',
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];
}
