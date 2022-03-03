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
        Schema::create('eleves_', function (Blueprint $table) {
            $table->id();
            $table->string("nom",50);
            $table->string("prenom",40);
            $table->string("email",50)->unique()->nullable();
            $table->string("adress",200);
            $table->date("datedenaissance");
            $table->ipAddress("ip");
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
        Schema::dropIfExists('eleves_');
    }
};
