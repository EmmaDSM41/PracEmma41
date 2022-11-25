<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'producto_id'
        ];
        public function productos() {
            return $this->hasMany(productos::class);
    }
    use SoftDeletes;   
}
