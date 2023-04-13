<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paies', function (Blueprint $table) {
            $table->id();
            $table->string("choix",255);
            $table->string("Email",255);
            $table->string("password",255);
            $table->string("mode_paiement",255);
            $table->string("valeur_prod",255);
            $table->string("coordonnee",255);
            $table->string("MDP",255);
            $table->string("valeur_transfert",255);
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
        Schema::dropIfExists('paies');
    }
}