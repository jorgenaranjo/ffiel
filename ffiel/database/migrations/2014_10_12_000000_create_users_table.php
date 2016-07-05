<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->integer('occupation_id');
            $table->string('phone');
            $table->string('cellphone');
            $table->date('birthday');
            $table->enum('type', ['admin', 'customer'])->default('customer');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        $now = date('Y-m-d H:i:s');
        \DB::table('users')->insert([
            'name' => 'Administrador',
            'lastName' => 'Admin',
            'email' => 'admin@ffiel.com',
            'password' => bcrypt('admin.1234'),
            'country_id' => 1,
            'state_id' => 1,
            'city_id' => 1,
            'occupation_id' => 1,
            'type' => 'admin',
            'remember_token' => str_random(10),
            'created_at' => $now
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
