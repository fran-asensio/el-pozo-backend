<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergeno extends Model {
    use HasFactory;

    protected $table = 'alergenos';
    protected $primaryKey = 'id_alergeno';
    
    public $timestamps = false;

    protected $fillable = [
        'nombre_alergeno',
        'descripcion'
    ];

    public function productos() {
        return $this->belongsToMany(
            Producto::class, 
            'trazas', 
            'id_alergeno', 
            'id_producto'
        );
    }
}