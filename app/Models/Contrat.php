<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $primaryKey = 'codeContrat';
    protected $fillable = ['dureeContrat', 'etatContrat', 'codeDemandeM'];
}