<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturation extends Model
{
    use HasFactory;
    protected $table ='facturations';
    protected $fillable =['id','reference','montant','nom','prenom','nbmois','prix','consommation','adresse','redfix','tva','rtt','periodedebut','periodefin','payeravl','district','id_type'];
    protected $hidden =[];
}
