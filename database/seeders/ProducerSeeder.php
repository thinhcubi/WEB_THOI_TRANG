<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producer = new Producer();
        $producer->name = 'Giant';
        $producer->save();

        $producer = new Producer();
        $producer->name = 'Make';
        $producer->save();

        $producer = new Producer();
        $producer->name = 'PK';
        $producer->save();
    }
}
