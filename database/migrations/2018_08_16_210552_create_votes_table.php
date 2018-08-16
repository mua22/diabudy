<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->integer('answerId');
            $table->integer('totalVotes');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
