<?php

namespace Database\Seeders;

use App\Models\CommonData;
use App\Models\Location;
use App\Models\PestData;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create Users first
        $users = User::factory(10)->create();


        // Then create CommonData associated with those users
        $users->each(function ($user) {
            CommonData::factory(3)->create(['user_id' => $user->id]);
        });

        // Finally, create PestData associated with the CommonData
        CommonData::all()->each(function ($commonData) {
            PestData::factory(3)->create(['common_data_id' => $commonData->id]);
        });

    }
}
