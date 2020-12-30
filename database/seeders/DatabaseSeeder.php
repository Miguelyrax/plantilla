<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage; //se usa para generar nuevas carpetas

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('courses'); //Eliminamos el directorio con todo lo que tiene adentro
        Storage::makeDirectory('courses'); //Creamos el directorio de nuevo
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(CourseSeeder::class);
        

    }
}
