<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Point;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

	Point::create([
	    'name'=>'岡山駅',
	    'lat'=>34.6654,
	    'lng'=>133.9185,
	    'address'=>'岡山県岡山市北区駅元町'
	]);

 	Point::create([
	    'name'=>'株式会社電信',
	    'lat'=>34.10542,
	    'lng'=>134.581143,
	    'address'=>'徳島県徳島市川内町平石若宮121-1'
	]);
   }
}
