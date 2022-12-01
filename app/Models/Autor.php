<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    public function nomCognoms() {
        return $this->nom . " " . $this->cognoms;
    }

    public function quantLlibres() {
        return $this->hasMany(Llibre::class);
    }

}
