<?php

namespace App\classes;

class Product
{
    public function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'New Product',
                'price'       => '4500',
                'description' => 'description',
                'image'       => 'pic-1.jpeg',
            ],
            1 => [
                'id'          => 2,
                'name'        => 'New T-shirt',
                'price'       => '5500',
                'description' => 'description',
                'image'       => 'pic-2.jpg',
            ],
            2 => [
                'id'          => 3,
                'name'        => 'New Shari',
                'price'       => '19500',
                'description' => 'description',
                'image'       => 'pic-3.jfif',
            ],
        ];
    }
}