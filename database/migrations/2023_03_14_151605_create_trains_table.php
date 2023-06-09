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
            $table->timestamps();
            $table->string('nome_azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->string('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->tinyInteger('in_orario');
            $table->tinyInteger('cancellato');
            $table->datetime('orario_partenza');
            $table->datetime('orario_arrivo');
            
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
