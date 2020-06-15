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
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('categorie_id');
            $table->string('vilDepart');
            $table->string('vilArrive');
            $table->dateTime('dateDepart');
            $table->dateTime('dateArrive');
            $table->longText('content');
            $table->integer('kilo');
            $table->integer('prix');
            $table->boolean('isCourrier');
            $table->boolean('isvalise');
            $table->string('photo');
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
