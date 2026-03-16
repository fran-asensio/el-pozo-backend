<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutriente extends Model {
    use HasFactory;

    protected $table = 'nutrientes';
    protected $primaryKey = 'id_nutriente';
    public $timestamps = false;

    protected $fillable = [
        'id_producto',
        'calorias',
        'grasas',
        'azucares',
        'proteinas',
        'hidratos'
    ];

    public function producto() {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }
}
