<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class Product extends Model
{
    protected $primaryKey = 'id';
    public function categorie()
    {
        return $this->belongsTo("App\Categorie");
    }

    public function cart()
    {
        return $this->hasMany("App\Cart");
    }
}
