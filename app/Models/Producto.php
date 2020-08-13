<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'Nombre',
        'Localizacion',
        'Precio',
        'Caducidad',
    
    ];
    
    
    protected $dates = [
        'Caducidad',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/productos/'.$this->getKey());
    }
}
