<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table ='demandes';
    protected $fillable =['id','reference','montant_initial','montant_a_payer','reponse'];
    protected $hidden =[];
}
