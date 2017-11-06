<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItBankPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itb_income', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->integer('eid');
            $table->float('money');
            $table->timestamps();
        });
        Schema::create('itb_expend', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->integer('eid');
            $table->float('money');
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
        Schema::drop('itb_income');
        Schema::drop('itb_expend');
    }
}
