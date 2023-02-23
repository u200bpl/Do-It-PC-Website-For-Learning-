<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;
    protected $table = 'processors';
    protected $guarded = [];
    
    public function gamingpc() {
        return $this->hasMany(Gamingpc::class, 'processor_id');
    }
}
