<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Series extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('series', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
           $table->integer('session');
           $table->integer('episode');
           $table->date('date_last_episode');
           $table->boolean('is_ended')->default(0)->nullable(true);
           $table->text('notes');
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
        //
    }
}
