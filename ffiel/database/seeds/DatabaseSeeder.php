<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //factory('App\User', 50)->create();
        //factory('App\Event', 1)->create();
        //factory('App\Workshop', 20)->create();

        Model::reguard();
    }
}
