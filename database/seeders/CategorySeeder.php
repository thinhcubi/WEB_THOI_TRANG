<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Xe đạp';
        $category->save();

        $category = new Category();
        $category->name = 'Xe cân bằng';
        $category->save();

        $category = new Category();
        $category->name = 'Xe đạp bánh béo';
        $category->save();
    }
}
