<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Artikel;
use App\Komentar;
use Illuminate\Support\Str;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Kosongkan Isi Table
        DB::table('users')->truncate();
        DB::table('artikel')->truncate();
        DB::table('komentar')->truncate();

        // inisiasi faker
        $faker = Faker\Factory::create();

        // Buat akun admin
        User::create([
            'username' => 'admin',
            'name' => 'Super Admin',
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt(123456), // password sama untuk semua users
            'remember_token' => Str::random(10),
        ]);

        // Generate 5 dummy users
        for ($i=1; $i <= 5; $i++) { 
            User::create([
                'username' => 'user'.$i, //user1 s/d user5
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt(123456), // password sama untuk semua users
                'remember_token' => Str::random(10),
            ]);
        }

        // Generate 25 dummy artikel
        for ($i=0; $i < 25; $i++) { 
            Artikel::create([
                'user_id' => rand(2,6), // 1 adalah admin sisanya adalah dummy user
                'judul' => $faker->sentence,
                'isi' => $faker->text,
                'created_at' => $faker->dateTimeThisYear
            ]);
        }

        // Generate 25 dummy artikel
        for ($i=0; $i < 250; $i++) { 
            Komentar::create([
                'artikel_id' => rand(1,25), // sesuai jumlah artikel
                'isi' => $faker->text,
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
