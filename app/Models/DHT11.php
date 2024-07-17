<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DHT11 extends Model
{
    use HasFactory;

    protected $table = 'dht11';

    protected $fillable = ['temperature', 'humidity', 'date', 'time'];
}
