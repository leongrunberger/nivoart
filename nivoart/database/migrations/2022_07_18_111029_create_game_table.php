<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id');
            $table->String('titel');
            $table->String('eins');
            $table->String('zwei');
            $table->String('drei');
            $table->String('vier');
            $table->String('fuenf');
            $table->String('sechs');
            $table->String('sieben');
            $table->String('acht');
            $table->String('neun');
            $table->String('zehn');
            $table->String('kategorie')->nullable();
            $table->String('ersteller')->nullable();
            $table->String('quelle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
};
