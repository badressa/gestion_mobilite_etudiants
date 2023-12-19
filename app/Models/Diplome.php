<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $primaryKey = 'codeDiplome';
    protected $fillable = ['nomDiplome', 'niveauDiplome', 'codeU'];
}
