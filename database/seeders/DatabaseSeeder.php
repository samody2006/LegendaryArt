<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            LaratrustSeeder::class,
            AlbumTableSeeder::class,
            PhotoTableSeeder::class,
            ContactInfoTableSeeder::class,
            TeamSeeder::class,
            SettingTableSeeder::class,
        ]);
    }
}
