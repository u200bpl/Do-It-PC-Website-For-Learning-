<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graphicscard extends Model
{
    use HasFactory;
    protected $table = 'graphicscards';
    protected $guarded = [];

    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'graphicscard_id');
    }
}
