<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes_produits', function (Blueprint $table) {
            $table->unsignedBigInteger('produits_id');
            $table->unsignedBigInteger('commandes_id');
            $table->integer('prix_total');
            $table->integer('quantite_total');
            $table->foreign('produits_id')->references('id')->on('produits');
            $table->foreign('commandes_id')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes_produits');
    }
}
