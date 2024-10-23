<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            //Azienda
            $table->string('company', 64);
            //Stazione di partenza
            $table->string('departure_station', 64);
            //Stazione di arrivo
            $table->string('arrive_station', 64);
            //Orario di partenza
            $table->time('departure_time');
            //Orario di arrivo
            $table->time('arrive_time');
            //Codice Treno
            // -
            //Numero Carrozze
            $table->tinyInteger('carriages_number')->nullable()->unsigned();
            //In orario
            $table->boolean('on_time')->default(true);
            //Cancellato
            $table->boolean('canceled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};