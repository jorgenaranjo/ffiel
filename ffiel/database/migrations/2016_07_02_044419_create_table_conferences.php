<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('startDate');
            $table->integer('quantity');
            $table->string('street');
            $table->string('noExt');
            $table->string('city');
            $table->string('state');
            $table->longText('description');
            $table->string('speaker_name');
            $table->longText('speaker_image');
            $table->longText('image');
            $table->dateTime('endDate');
            $table->string('code');
            $table->integer('event_id');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conferences');
    }
}
