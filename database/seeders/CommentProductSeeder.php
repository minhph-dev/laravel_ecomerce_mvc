<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentProductSeeder extends Seeder
{
    public function run()
    {
        $commentProducts = [
            [
                'product_id' => '1',
                'user_id' => '1',
                'comment' => 'Thanks for your feedback !!!',
                'image' => '',
            ], 
            [
                'product_id' => '1',
                'user_id' => '2',
                'comment' => 'Good Product !!',
                'image' => '',
            ],
            [
                'product_id' => '1',
                'user_id' => '6',
                'comment' => 'Item same as photo !!',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/250728/Slider/vi-vn-iphone-13-pro-max-1tb--(1).jpg',
            ],
            [
                'product_id' => '1',
                'user_id' => '3',
                'comment' => 'Product Color beautiful !!!',
                'image' => '',
            ], 
            [
                'product_id' => '1',
                'user_id' => '4',
                'comment' => 'Fast delivery !!',
                'image' => '',
            ], 
            [
                'product_id' => '1',
                'user_id' => '5',
                'comment' => 'Cheap !!!',
                'image' => '',
            ],
        ];

        foreach ($commentProducts as $key => $value) {
            Comment::create($value);
        }
    }
}
