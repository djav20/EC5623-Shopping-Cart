<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1200'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1300'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1400'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1500'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1600'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/_gB8i9RgQMBM/TNqlopxCTeI/AAAAAAAAUcg/8fj7htIuiFU/s1600/katana.jpg',
            'title' => 'Katana',
            'description' => 'Well... you can cut onions with it.',
            'price' => '1700'
        ]);
        $product->save();
    }
}
