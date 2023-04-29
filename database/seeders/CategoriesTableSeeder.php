<?php

namespace Database\Seeders;

use App\Models\book_category;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of book categories
        $categories = [
            'Novel',
            'Grim Dark',
            'Science-Fiction',
            'Fantasy',
            'Adventure',
            'Romance',
            'Dystopian',
            'Mystery',
            'Horror',
            'Thriller',
            'Paranormal',
            'Historical Fiction',
            "Children's",
            'Classics',
            'Detective',
            'History',
            'Poetry',
            'Biography',
        ];

        // Loop through categories and create BookCategory model for each one
        foreach ($categories as $category) {
            Categories::create([
                'book_category' => $category,
            ]);
        };
    }
}
