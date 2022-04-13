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
        Schema::create('livreauteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_livre");
            $table->unsignedBigInteger("id_auteur");
            $table->foreign('id_livre')->references('id')->on('livres')->onDelete('cascade');
            $table->foreign('id_auteur')->references('id')->on('auteurs')->onDelete('cascade');
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
        Schema::dropIfExists('livreauteurs');
    }
};
