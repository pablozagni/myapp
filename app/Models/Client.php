<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function getRouteKeyName() {
        return "name";
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function countries() {
        return $this->belongsToMany(Country::class);
    }

}
