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
            $table->String('Titel');
            $table->String('1');
            $table->String('2');
            $table->String('3');
            $table->String('4');
            $table->String('5');
            $table->String('6');
            $table->String('7');
            $table->String('8');
            $table->String('9');
            $table->String('10');
            $table->String('Kategorie');
            $table->String('Ersteller');
            $table->String('Quelle');
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
