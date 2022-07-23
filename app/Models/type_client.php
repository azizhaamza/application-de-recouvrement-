<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_client extends Model
{
    use HasFactory;
    protected $table ='type_client';
    protected $fillable =['id','type'];
    protected $hidden =[];
}
