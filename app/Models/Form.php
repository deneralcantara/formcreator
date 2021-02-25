<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i',
        'updated_at' => 'datetime:d/m/Y H:i',
    ];

    public function questions () {
        return $this->hasMany('App\Models\FormQuestion');
    }
}
