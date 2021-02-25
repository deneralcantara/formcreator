<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{

    protected $fillable = [
        'form_id',
        'question',
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i',
        'updated_at' => 'datetime:d/m/Y H:i',
    ];

    public function answer () {
        return $this->hasOne('App\Models\FormQuestionAnswer');
    }
}
