<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_services', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');



            $table->dateTime('date');
            $table->string('comment');

            $table->text('spare_parts')->nullable();
            $table->string('parts_charge')->default(0);
            $table->string('other_charge')->default(0);
            //$table->string('total')->default(0);
            $table->string('status')->default('pending');
            $table->string('pay_status')->default('unpaid');
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
        Schema::dropIfExists('free_services');
    }
}
