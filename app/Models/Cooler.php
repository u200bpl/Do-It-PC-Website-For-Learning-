<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooler extends Model
{
    use HasFactory;
    protected $table = 'coolers';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'cooler_id');
    }
}
