<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['perCurp', 'perApellido1','perApellido2','perNombre','perFechaNac','perSexo','perCorreo1'];
}