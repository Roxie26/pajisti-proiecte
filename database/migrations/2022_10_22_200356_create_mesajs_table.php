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
        Schema::create('mesajs', function (Blueprint $table) {
            $table->id();
            $table->string('nume');
            $table->string('email');
            $table->string('titlu');
            $table->text('mesaj');
            $table->timestamps('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesajs');
    }
};
