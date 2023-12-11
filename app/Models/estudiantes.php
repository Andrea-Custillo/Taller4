<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['nombre','apellido','edad','sexo','id_seccion'];
}
