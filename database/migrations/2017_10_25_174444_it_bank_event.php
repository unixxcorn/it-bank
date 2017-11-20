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
            $table->longText('description')->nullable($value = true);
            $table->float('money');
            $table->date('deadline');
            $table->boolean('is_expend');
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
