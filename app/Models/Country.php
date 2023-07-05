<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    public function getRouteKeyName() {
        return "name";
    }

    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function users() {
        return $this->hasManyThrough(User::class, Client::class);
    }

    static function selector() {
        return Country::orderBy('name')->pluck('name','id');
    }
}
