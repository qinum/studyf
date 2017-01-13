<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EinnahmenErstellen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('einnahmen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kategorie');
            $table->string('Beschreibung');
            $table->integer('Betrag');
            $table->date('Datum');
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
        Schema::dropIfExists('einnahmen');
    }
}
