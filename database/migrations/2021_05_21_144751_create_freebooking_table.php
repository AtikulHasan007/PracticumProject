<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreebookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freebooking', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('user_name');
            $table->string('brand');
            $table->string('model');
            $table->integer('total_service');
            $table->intteger('total_service');

            $table->text('spare_parts');
            $table->intteger('parts_charge');
            $table->intteger('total_service');
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
        Schema::dropIfExists('freebooking');
    }
}
