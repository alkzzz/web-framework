<?php

use Illuminate\Database\Seeder;
use App\Artikel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Hapus Table Artikel
        DB::table('artikel')->truncate();

        // Generate 50 dummy artikel
        $faker = Faker\Factory::create();
        for ($i=0; $i < 50; $i++) { 
            Artikel::create([
                'judul' => $faker->sentence,
                'isi' => $faker->text
            ]);
        }
    }
}
