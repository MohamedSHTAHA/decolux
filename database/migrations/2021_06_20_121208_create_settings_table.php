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
             $table->string('title')->nullable();
             $table->string('logo')->default('default.png');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('website')->defalut(0);
            $table->integer('web')->defalut(0);
            $table->string('address')->nullable();
            $table->string('facbook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instgram')->nullable();
            $table->string('binterest')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('discpriton')->nullable();
            $table->text('pdf')->nullable();
            $table->text('ourvision')->nullable();
            $table->text('Ourvendorsbrands')->nullable();
            $table->text('sliderimg1')->nullable();
            $table->text('sliderimg2')->nullable();
            $table->text('footerimg')->nullable();

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
