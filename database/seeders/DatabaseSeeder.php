<?php

namespace Database\Seeders;

use App\Models\commandes;
use App\Models\User;
use App\Models\produits;
use Illuminate\Database\Seeder;
use Database\Factories\ProduitsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->count(10)
        ->has(
            commandes::factory()
                ->count(3)
                ->hasAttached(
                produits::factory()->count(5), [
                    'prix_total'=>rand(100,500),
                    'quantite_total'=>rand(1,3)
                ]
            )
        )->create();
    }
}
