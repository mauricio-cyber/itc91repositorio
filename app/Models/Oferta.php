<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/ofertas/'.$this->getKey());
    }
}
