<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('pkrdSeeder');
        $this->call('pkrplmSeeder');
        $this->call('pktiSeeder');
        $this->call('pktkseSeeder'); 
    }
}