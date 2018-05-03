<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSugarCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugar_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('readings', function (Blueprint $table) {
            $table->integer('sugar_category_id')->unsigned()->nullable();
            $table->foreign('sugar_category_id')->references('id')->on('sugar_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->dropForeign(['sugar_category_id']);
        });
        Schema::table('readings', function (Blueprint $table) {
            $table->dropColumn('sugar_category_id');
        });
        Schema::table('sugar_categories', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('sugar_categories');
    }
}
