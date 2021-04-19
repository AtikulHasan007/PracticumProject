<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('cc');
            $table->string('type');
            $table->string('engine_no');
            $table->date('date');
            $table->string('total_service');
            $table->data();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
