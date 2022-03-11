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
        Schema::create('busines_projets', function (Blueprint $table) {
            $table->id();
            $table->string("sousTitre");
            $table->string("titre");
            $table->text("text");
            $table->text("text2");
            $table->string("lien");
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
        Schema::dropIfExists('busines_projets');
    }
};
