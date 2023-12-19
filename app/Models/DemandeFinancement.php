<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeFinancement extends Model
{
    protected $primaryKey = 'codeDemandeF';
    protected $fillable = ['dateDepotDemandeF', 'etatDemandeF', 'montantDemandeF', 'codeContrat', 'numEtudiant'];
}