<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->string('address',191);
            $table->string('contact',191);
            $table->string('national_id',191);
            $table->string('passport_id',191);
            $table->integer('status')->default(0)->comment('0->pending, 1->active, 2->banned');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
