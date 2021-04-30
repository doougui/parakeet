<?php

use App\User;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $primaryUser = User::first();

        $firstFollow = User::skip(1)->first();
        $secondFollow = User::skip(2)->first();

        $primaryUser->follow($firstFollow);
        $primaryUser->follow($secondFollow);

        $firstFollow->follow($primaryUser);
        $secondFollow->follow($firstFollow);
    }
}
