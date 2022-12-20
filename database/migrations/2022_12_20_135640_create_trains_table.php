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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 70)->nullable();
            $table->string('stazione_di_partenza', 50)->nullable();
            $table->string('stazione_di_arrivo', 50)->nullable();
            $table->time('orario_di_partenza')->nullable();
            $table->time('orario_di_arrivo')->nullable();
            $table->string('codice_treno', 7);
            $table->integer('numero_carrozze')->nullable();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
};