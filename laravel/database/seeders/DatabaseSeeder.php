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
            "country"=> "Japan",
            "age" => 27,
            "thumbnail" => "https://th.bing.com/th?id=OSK.HERO5E6A1BF586CD3ACDDED324113EC3B01C7D5C5EBD&w=384&h=228&c=13&rs=2&o=6&pid=SANGAM",
        ]);
        
        User::create([
            "name" => "Momo Mirai",
            "groupname" => "Twice",
            "country"=> "Japan",
            "age" => 27,
            "thumbnail" => "https://th.bing.com/th?id=OSK.Waj5Gw1a5hHGqbpwqSFOUM00diMDxELzL2I3O2eIi3w&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);
        
        User::create([
            "name" => "Mina Sharon Myoi",
            "groupname" => "Twice",
            "country"=> "Japan",
            "age" => 27,
            "thumbnail" => "https://th.bing.com/th?id=OSK.RrluHepTETClMhQ6UYT4sXPtV5Pz7sm30P--InGse0Y&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);

        User::create([
            "name" => "Chou Tzuyu",
            "groupname" => "Twice",
            "country"=> "Taiwan",
            "age" => 25 ,
            "thumbnail" => "https://th.bing.com/th?id=OSK.xMdLOK68T-ez1BEdDAJmIiRsLDZfi0ay40e3Ybc5n8o&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);
        
        User::create([
            "name" => "Park Jihyo",
            "groupname" => "Twice",
            "country"=> "Soutb Korea",
            "age" => 27 ,
            "thumbnail" => "https://th.bing.com/th?id=OSK.WouzY8piREcDG_MWREPyeuz9yi0vgg9trUU5X2FtLqc&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);
        
        User::create([
            "name" => "Im Nayeon",
            "groupname" => "Twice",
            "country"=> "South Korea",
            "age" => 27 ,
            "thumbnail" => "https://th.bing.com/th?id=OIP.z-7RjZvXwR9RhmktNO-NPAAAAA&w=80&h=80&c=1&vt=10&bgcl=9cb344&r=0&o=6&pid=5.1"
        ]);

        User::create([
            "name" => "Son Chaeyoung",
            "groupname" => "Twice",
            "country"=> "South Korea",
            "age" => 25 ,
            "thumbnail" => "https://th.bing.com/th?id=OSK.LG932evPkLFLjCChSLrcpxRqsUpSqu9c-Acg5yUINxc&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);

        User::create([
            "name" => "Kim Dahyun",
            "groupname" => "Twice",
            "country"=> "South Korea",
            "age" => 26 ,
            "thumbnail" => "https://th.bing.com/th?id=OSK.1d-qgmemxP_h3AXsVJGH89_6efwIZH-9buTzBs9a8PA&w=120&h=120&c=12&o=6&pid=SANGAM",
        ]);

        User::create([
            "name" => "Mikhamot Libag",
            "groupname" => "Bini",
            "country"=> "Philippines",
             "age" => 26 ,
            "thumbnail" => "https://tinyurl.com/77ycz2mj"
        ]);
        

        User::create([
            "name" => "Manoy Loid Ricalde",
            "groupname" => "Bini",
            "country"=> "Philippines",
            "age" => 26 ,
            "thumbnail" => "https://tinyurl.com/77ycz2mj"
        ]);
        
      
    }
}
