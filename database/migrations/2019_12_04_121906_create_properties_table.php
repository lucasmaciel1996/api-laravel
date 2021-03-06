<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('local_lat');
            $table->string('local_lng');
            $table->integer('total_peca');
            $table->boolean('ligado');
            $table->unsignedBigInteger('devices_id');
            $table->foreign('devices_id')->references('id')->on('devices')->onDelete('cascade');
            $table->boolean('ativo')->default(1);
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
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['devices_id']);
        });
        Schema::dropIfExists('properties');
    }
}
