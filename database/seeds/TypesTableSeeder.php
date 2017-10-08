<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 6) as $index) {
            \App\Models\Type::create([
                'user_id' => env('USER_ID', 1),
                'type_name' => $faker->state
            ]);
        }
    }
}
