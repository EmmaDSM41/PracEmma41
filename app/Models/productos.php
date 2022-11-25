<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class productos extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'descripcion',
        'precio',
        'proveedor_id'
        ];
        public function proveedor() {
            return $this->belongsTo(proveedor::class);
        }
        public function clientes() {
            return $this->belongsTo(clientes::class);
        }

    use SoftDeletes;
}
