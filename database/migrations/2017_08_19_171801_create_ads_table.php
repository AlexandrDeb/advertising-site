<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('author_name');
            $table->timestamp('created_at_datetime');
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
        Schema::drop('ads');
    }

}
