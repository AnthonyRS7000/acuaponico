<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmp180Table extends Migration
{
    public function up()
    {
        Schema::create('bmp180', function (Blueprint $table) {
            $table->id();
            $table->float('pressure');
            $table->float('temperature');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bmp180');
    }
}
