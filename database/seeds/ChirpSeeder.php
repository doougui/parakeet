<?php

use App\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Chirp::class, 5)->create(['user_id' => User::first()->id]);
        factory(App\Chirp::class, 3)->create();
    }
}
