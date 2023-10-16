<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{

    private $technologies = [
        [
            'name' => 'Html',
            'slug' => 'Html',
            'icon' => '<i class="fa-brands fa-html5"></i>',
        ],
        [
            'name' => 'Css',
            'slug' => 'Css',
            'icon' => '<i class="fa-brands fa-css3-alt"></i>',
        ],
        [
            'name' => 'Sass',
            'slug' => 'Sass',
            'icon' => '<i class="fa-brands fa-sass"></i>',
        ],
        [
            'name' => 'JavaScript',
            'slug' => 'JavaScript',
            'icon' => '<i class="fa-brands fa-square-js"></i>',
        ],
        [
            'name' => 'Vue.js',
            'slug' => 'Vue.js',
            'icon' => '<i class="fa-brands fa-vuejs"></i>',
        ],
        [
            'name' => 'Php',
            'slug' => 'Php',
            'icon' => '<i class="fa-brands fa-php"></i>',
        ],
        [
            'name' => 'MySql',
            'slug' => 'Mysql',
            'icon' => '<i class="fa-regular fa-database"></i>',
        ],
        [
            'name' => 'Laravel',
            'slug' => 'Laravel',
            'icon' => '<i class="fa-brands fa-laravel"></i>',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->technologies as $technology) {

            $newTechnology = new Technology();
            $newTechnology->name = $technology['name'];
            $newTechnology->slug = $technology['slug'];
            $newTechnology->icon = $technology['icon'];
            $newTechnology->save();
        }
    }
}
