<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    protected $primaryKey = 'codeU';
    protected $fillable = ['nomU', 'villeU', 'paysU', 'webU'];
}