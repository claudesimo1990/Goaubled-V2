<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('categorie_id');
            $table->string('vilDepart');
            $table->string('user_avatar')->nullable();
            $table->string('user_avatar_original')->nullable();
            $table->string('vilArrive');
            $table->dateTime('dateDepart');
            $table->longText('content');
            $table->integer('kilo');
            $table->integer('prix');
            $table->integer('quantity');
            $table->longText('photo')->nullable();
            $table->string('nameColi');
            $table->string('path')->nullable();
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
        Schema::dropIfExists('colis');
    }
}
