<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $primaryKey = 'codeCours';
    protected $fillable = ['LibelleCours', 'nbECTS', 'annee', 'codeDiplome'];
}