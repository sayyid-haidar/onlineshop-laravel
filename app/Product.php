<?php

namespace App;
use App\Categorie;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    public function categorie()
    {
        return $this->belongsTo("App\Categorie");
    }
}
