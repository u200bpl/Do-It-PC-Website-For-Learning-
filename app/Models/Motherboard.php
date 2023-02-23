<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    use HasFactory;
    protected $table = 'motherboards';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'motherboard_id');
    }
}
