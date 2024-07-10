<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $settings = [
            ['name' => 'Notification', 'value' => 'true'],
            ['name' => 'Language', 'value' => 'English'],
            ['name' => 'Profile', 'value' => 'Update Profile'],
            // Tambahkan pengaturan lainnya sesuai kebutuhan
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
    
}
