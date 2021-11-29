<?php

namespace Database\Seeders;

use App\Http\Controllers\ProductStatus;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Quần bò jean';
        $product->desc = '';
        $product->quantity = 100;
        $product->status = ProductStatus::Product_status1;
        $product->price = '20000';
        $product->category_id = '1';
        $product->producer_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'Áo polo trắng';
        $product->desc = '';
        $product->quantity = 150;
        $product->status = ProductStatus::Product_status2;
        $product->price = '30000';
        $product->category_id = '10';
        $product->producer_id = '2';
        $product->save();

        $product = new Product();
        $product->name = 'Quần âu đen';
        $product->desc = '';
        $product->quantity = 18;
        $product->status = ProductStatus::Product_status1;
        $product->price = '40000';
        $product->category_id = '11';
        $product->producer_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'Vòng tay';
        $product->desc = '';
        $product->quantity = 60;
        $product->status = ProductStatus::Product_status2;
        $product->price = '15000';
        $product->category_id = '1';
        $product->producer_id = '2';
        $product->save();



    }
}
