<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $primaryKey = 'codeProgramme';
    protected $fillable = ['nomProgramme', 'dureeEchange', 'codeDiplome', 'codeDiplome_1'];
}