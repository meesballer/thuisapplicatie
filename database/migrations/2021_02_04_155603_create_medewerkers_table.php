<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedewerkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medewerkers', function (Blueprint $table) {
            $table->id();
            $table->string('VoorNaam');
            $table->string('AchterNaam');
            $table->integer('bedrijfs_id');
            $table->string('Email');
            $table->string('Telefoon');
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
        Schema::dropIfExists('medewerkers');
    }
}
