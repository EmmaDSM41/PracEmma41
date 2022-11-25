<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class proveedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descripcion',
        'direccion',
        'telefono'
        ];
    
        public function productos() {
            return $this->hasMany(productos::class);
    
        }
        
    use SoftDeletes;
}
