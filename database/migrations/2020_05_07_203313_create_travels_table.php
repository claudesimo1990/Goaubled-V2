<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('categorie_id')->default(1);
            $table->string('vilDepart');
            $table->string('user_avatar')->nullable();
            $table->string('vilArrive');
            $table->dateTime('date_depart');
            $table->dateTime('date_arrive');
            $table->longText('content');
            $table->integer('kiloAvalable');
            $table->integer('prixKilo');
            $table->boolean('hasCourrier');
            $table->integer('prixCourrier');
            $table->string('compagnie');
            $table->string('photoBielletAvion');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('travels');
    }
}
