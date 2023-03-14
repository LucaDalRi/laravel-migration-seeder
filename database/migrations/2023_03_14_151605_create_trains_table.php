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
        Schema::create('treni', function (Blueprint $table) {
            $table->id();
            $table->string('nome_azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->mediumInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->tinyInteger('in_orario');
            $table->tinyInteger('cancellato');
            $table->datetime('orario_partenza');
            $table->datetime('orario_arrivo');
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
        Schema::dropIfExists('treni');
    }
};
