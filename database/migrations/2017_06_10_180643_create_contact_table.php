<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');

            $table->string('address');
            $table->string('type');
            $table->string('name');


            $table->string('email',250);
            $table->string('personInCharge');

            $table->string('telephone');
            $table->string('website');
            $table->string('longitude');
            $table->string('latitude');

            $table->foreign('name')->references('name')->on('users');
            $table->foreign('type')->references('type')->on('users');


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
        Schema::dropIfExists('contact');

    }
}
