<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Playstation',
                'slug' => 'playstation',
                'description' => 'Playstation games',
                'image' => '/img/categories/category-2.jpg',
            ],
            [
                'name' => 'Xbox',
                'slug' => 'xbox',
                'description' => 'Xbox games',
                'image' => '/img/categories/category-3.jpg',
            ],
            [
                'name' => 'PC',
                'slug' => 'pc',
                'description' => 'PC games',
                'image' => '/img/categories/category-4.jpg',
            ],
        ];

        foreach ($categories as $cat) {

            Category::updateOrCreate(
                [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ],
                [
                    'description' => $cat['description'],
                    'image' => $cat['image'],
                    'status_id' => Status::where(['name' => 'Aktyvus', 'type'=>'product'])->first()->id,
                    'parent_id' => null,
                ]
            );
        }
    }
}
