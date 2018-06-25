<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slider1');
            $table->string('slider2');
            $table->string('slider3');
            $table->string('promote1');
            $table->string('writeup1');
            $table->string('link1');
            $table->string('promote2');
            $table->string('writeup2');
            $table->string('link2');
            $table->string('promote3');
            $table->string('writeup3');
            $table->string('link3');
            $table->json('weekly');
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
        Schema::dropIfExists('homepages');
    }
}
