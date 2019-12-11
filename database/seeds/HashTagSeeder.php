<?php

use Illuminate\Database\Seeder;
use App\TweetCounter;

class HashTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TweetCounter::create([
            'name' => 'همة_حتى_القمة',
            'total' => 0,
        ]);
    }
}
