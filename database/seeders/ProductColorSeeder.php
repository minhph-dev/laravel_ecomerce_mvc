<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    public function run()
    {
        $productColors = [
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '1',
                'quantity' => 0,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '2',
                'quantity' => 1,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '3',
                'quantity' => 2,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '4',
                'quantity' => 3,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '5',
                'quantity' => 4,
            ],
            
        ];

        foreach ($productColors as $key => $value) {
            ProductColor::create($value);
        }
    }
}
