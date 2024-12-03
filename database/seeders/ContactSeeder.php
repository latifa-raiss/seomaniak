<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Insert 100 random contacts
        for ($i = 0; $i < 20; $i++) {
            Contact::create([
                'nom' => $faker->name,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}
