<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $primaryKey = 'numEtudiant';
    protected $fillable = ['nomEtudiant', 'prenomEtudiant', 'mailEtudiant', 'annee', 'codeDiplome'];
}
