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
        $primaryUser = User::find(1);
        $firstFollow = User::find(2);
        $secondFollow = User::find(3);

        $primaryUser->follow($firstFollow);
        $primaryUser->follow($secondFollow);

        $firstFollow->follow($primaryUser);
        $secondFollow->follow($firstFollow);
    }
}
