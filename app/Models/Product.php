<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        # especifica el nombre de la tabla dentro de la base de datos 
        protected $table = "product";

        #especifica la lleve primaria de la tabla
        protected $primaryKey = "id";

        #para los campos created_at y update_at
        public $timestamp = true;

        #columnas existentes dentro
        protected $fillable = [];
        
        #oculta columnas especificas dentro de las []
        protected $hidden = [];
        
}

