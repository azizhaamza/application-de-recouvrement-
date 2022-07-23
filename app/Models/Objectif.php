<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    use HasFactory;
    protected $table ='objectifs';
    protected $fillable =['id','district_nom','pourcentage','annee'];
    protected $hidden =[];
}
