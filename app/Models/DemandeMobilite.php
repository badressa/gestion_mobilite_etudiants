<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeMobilite extends Model
{
    protected $primaryKey = 'codeDemandeM';
    protected $fillable = ['dateDepotDemandeM', 'etatDemandeM', 'numEtudiant', 'codeProgramme'];
}