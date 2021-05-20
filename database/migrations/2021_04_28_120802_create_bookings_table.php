<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->integer('user_id');
            $table->string('bike_model');
            $table->string('service_name')->default('Custom_Service');
            $table->dateTime('date');
            $table->text('description');
            $table->integer('service_charge');
            $table->text('spare_parts')->nullable();
            $table->integer('parts_charge')->default(00);
            $table->integer('paid_amount')->default(00);
            $table->string('status')->default('pending');


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
        Schema::dropIfExists('bookings');
    }
}
