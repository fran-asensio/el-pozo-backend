<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model {
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo_qr'
    ];

    public function nutriente() {
        return $this->hasOne(Nutriente::class, 'id_producto', 'id_producto');
    }

    public function alergenos() {
        return $this->belongsToMany(
            Alergeno::class, 
            'trazas', 
            'id_producto', 
            'id_alergeno'
        );
    }
}
