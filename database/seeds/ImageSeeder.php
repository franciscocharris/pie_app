<?php

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeds de las imagenes de categorias
        Image::create([
            'image_path' => '1634872950img1.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Categorie'
        ]);
        Image::create([
            'image_path' => '1634873007img2.jpg',
            'imageable_id' => 2,
            'imageable_type' => 'App\Models\Categorie'
        ]);
        Image::create([
            'image_path' => '1634873020img3.jpg',
            'imageable_id' => 3,
            'imageable_type' => 'App\Models\Categorie'
        ]);
        // Image::create([
        //     'image_path' => '1634873166office-g647d2c7de_640.jpg',
        //     'imageable_id' => 4,
        //     'imageable_type' => 'App\Models\Categorie'
        // ]);
        // Image::create([
        //     'image_path' => '1634873091img4.jpg',
        //     'imageable_id' => 5,
        //     'imageable_type' => 'App\Models\Categorie'
        // ]);
        // Image::create([
        //     'image_path' => '1634873124img5.png',
        //     'imageable_id' => 6,
        //     'imageable_type' => 'App\Models\Categorie'
        // ]);
        // Image::create([
        //     'image_path' => '1634873142img6.jpg',
        //     'imageable_id' => 7,
        //     'imageable_type' => 'App\Models\Categorie'
        // ]);
    }
}
