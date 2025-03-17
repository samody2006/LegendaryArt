<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        ContactInfo::create([
            'title' => 'Phone',
            'slug' => 'phone',
            'description' => $faker->phoneNumber,
        ]);

        ContactInfo::create([
            'title' => 'Email',
            'slug' => 'email',
            'description' => $faker->email,
        ]);

        ContactInfo::create([
            'title' => 'Address',
            'slug' => 'address',
            'description' => $faker->address,
        ]);
    }
}
