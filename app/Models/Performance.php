<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class performance extends Model
{
    use HasFactory;
    protected $table = 'performances';
    protected $guarded = [];

    public function gamingpc() {
        return $this->belongsTo(Gamingpc::class, 'gamingpc_id');
    }

    public function game(){
        return $this->belongsTo(Game::class, "game_id");
    }
}
