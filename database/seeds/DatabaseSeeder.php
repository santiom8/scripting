<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        // $curso= new Post;

        // // $curso->title= "Laravel";
        // $curso->location= "medellin";
        // $curso->descrpcion= "descripcion para scriting";
        // $curso->url="www.google.com";
        // $curso->save();

    }
}
