<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_name',191);
            $table->integer('guest_no');
            $table->integer('bed_no');
            $table->integer('bed_rooms');
            $table->integer('bath');
            $table->float('price_per_day',5,2);
            $table->string('room_details',191);
            $table->string('more_info',191);
            $table->string('accommodation_type',191);
            $table->string('zone',191);
            $table->string('address',191);
            $table->string('house_rules',191);
            $table->string('neighborhood',191);
            $table->string('latitude',191);
            $table->string('longitude',191);
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
        Schema::dropIfExists('room_infos');
    }
}
