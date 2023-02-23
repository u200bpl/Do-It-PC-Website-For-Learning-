<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Powersuply extends Model
{
    use HasFactory;
    protected $table = 'powersuplies';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'powersuply_id');
    }
}
