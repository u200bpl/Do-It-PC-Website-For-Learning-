<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamingpc extends Model
{
    use HasFactory;
    protected $table = 'gamingpcs';
    protected $guarded = [];

    public function cooler(){
        return $this->belongsTo(Cooler::class, "cooler_id");
    }

    public function graphicscard(){
        return $this->belongsTo(Graphicscard::class, "graphicscard_id");
    }

    public function hdd(){
        return $this->belongsTo(Hdd::class, "hdd_id");
    }

    public function motherboard(){
        return $this->belongsTo(Motherboard::class, "motherboard_id");
    }

    public function pccase(){
        return $this->belongsTo(Pccase::class, "pccase_id");
    }

    public function powersuply(){
        return $this->belongsTo(Powersuply::class, "powersuply_id");
    }

    public function processor(){
        return $this->belongsTo(Processor::class, "processor_id");
    }

    public function ram(){
        return $this->belongsTo(Ram::class, "ram_id");
    }

    public function ssd(){
        return $this->belongsTo(Ssd::class, "ssd_id");
    }
}
