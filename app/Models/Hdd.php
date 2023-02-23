<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    use HasFactory;
    protected $table = 'hdds';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'hdd_id');
    }
}
