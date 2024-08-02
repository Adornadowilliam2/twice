<?php

namespace Database\Seeders;

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

        User::create([
            "name" => "Sana Minatozaki",
            "groupname" => "Twice",
            "country"=> "Japan"
        ]);
        
        User::create([
            "name" => "Momo Mirai",
            "groupname" => "Twice",
            "country"=> "Japan"
        ]);
        
        User::create([
            "name" => "Mina Sharon Myoi",
            "groupname" => "Twice",
            "country"=> "Japan"
        ]);

        User::create([
            "name" => "Chou Tzuyu",
            "groupname" => "Twice",
            "country"=> "Taiwan"
        ]);
        
        User::create([
            "name" => "Park Jihyo",
            "groupname" => "Twice",
            "country"=> "Soutb Korea"
        ]);
        
        User::create([
            "name" => "Im Nayeon",
            "groupname" => "Twice",
            "country"=> "South Korea"
        ]);

        User::create([
            "name" => "Son Chaeyoung",
            "groupname" => "Twice",
            "country"=> "South Korea"
        ]);

        User::create([
            "name" => "Kim Dahyun",
            "groupname" => "Twice",
            "country"=> "South Korea"
        ]);

        User::create([
            "name" => "Mikhamot Libag",
            "groupname" => "Bini",
            "country"=> "Philippines"
        ]);
        

        User::create([
            "name" => "Manoy Loid Ricalde",
            "groupname" => "Bini",
            "country"=> "Philippines"
        ]);
        
      
    }
}
