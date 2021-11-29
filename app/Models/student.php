<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = "studentdatas";
    protected $fillable = [
    	'id',
    	'name',
    	'city',
    	'marks'
    ];

    protected $table2 = "users";
    protected $fillable2 = [
    	'id',
    	'name',
    	'email ',
    	'password',
    	'contact'
    ];
}
