<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'site_title',
            'display_name' => 'Site Title',
            'slug' => Str::slug('Site Title'),
            'value' => 'Legendary Art',
        ]);

        Setting::create([
            'key' => 'site_copyright',
            'display_name' => 'Copyright Text',
            'slug' => Str::slug('Copyright Text'),
            'value' => 'Designed by <a href="#" target="_blank">Dr. Brain</a>',
        ]);
    }
}
