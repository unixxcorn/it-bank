<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItBankEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itb_event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event');
            $table->longText('description');
            $table->float('money');
            $table->timestamp('deadline');
            $table->boolean('inout');
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
        Schema::drop('itb_event');
    }
}
