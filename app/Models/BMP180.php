<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BMP180 extends Model
{
    use HasFactory;

    protected $table = 'bmp180';

    protected $fillable = ['pressure', 'temperature', 'date', 'time'];
}
