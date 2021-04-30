<?php

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
        factory(App\Chirp::class, 5)->create(['user_id' => (config('app.env') === 'production') ? 4 : 1 ]);
        factory(App\Chirp::class, 3)->create();
    }
}
