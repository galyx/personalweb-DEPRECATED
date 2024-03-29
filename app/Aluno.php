<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'access_code', 'cpf', 'name', 'date', 'email', 'mobile',
    ];
}
