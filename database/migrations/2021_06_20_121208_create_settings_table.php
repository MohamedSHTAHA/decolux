<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
             $table->string('title');
             $table->string('logo')->default('default.png');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->defalut(0);
            $table->integer('web')->defalut(0);
            $table->string('address');
            $table->string('facbook');
            $table->string('twiter');
            $table->string('linkedin');
            $table->string('instgram');
            $table->string('binterest');
            $table->string('lat');
            $table->string('long');
            $table->text('discpriton');
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
        Schema::dropIfExists('settings');
    }
}
