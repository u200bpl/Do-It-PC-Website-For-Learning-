<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssd extends Model
{
    use HasFactory;
    protected $table = 'ssds';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'ssd_id');
    }
}