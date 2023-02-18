<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pccase extends Model
{
    use HasFactory;
    protected $table = 'cases';
    protected $guarded = [];
}
