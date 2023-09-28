<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarEvents;
use App\Models\Cars;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // CarEvents::create([
        //     'event_name' => 'GT MOTORS',
        //     'event_date' => '2023-10-15', // Assuming the date format is YYYY-MM-DD
        //     'event_time' => '18:30:00',   // Assuming the time format is HH:MM:SS
        //     'venue' => 'KAREN',
        //     'ticket_price' => 29.99      // Assuming ticket prices are in decimal format
        // ]);

        // Cars::create([
        //     'make' => 'Toyota',
        //     'model' => 'Camry',
        //     'year' => 2023,
        //     'price' => 24999.99, 
        //     // 'images' => 'image.jpg'
        // ]);
    }
}
