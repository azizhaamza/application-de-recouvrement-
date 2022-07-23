<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creance extends Model
{
    use HasFactory;
    protected $table ='creances';
    protected $fillable =['id','reference','montant','jour_debut','mois_debut','anne_debut','jour_fin','mois_fin','anne_fin','type'];
    protected $hidden =[];
}
