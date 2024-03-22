<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'produk'=> 'laptop', 'harga' =>17000000],
            ['id' => 2, 'produk'=> 'mouse', 'harga' =>150000],
            ['id' => 3, 'produk'=> 'fan', 'harga' =>90000],
            ['id' => 4, 'produk'=> 'camera', 'harga' =>3600000],
        ];
        return $dataBarang;
    }

    public function list_Product()
    {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
};
//     public function listProduct()
//     {
//         $data = [
//             ['id' => 1, 'produk' => 'Laptop'],
//             ['id' => 2, 'produk' => 'Laptop Pen'],
//             ['id' => 3, 'produk' => 'Handphone'],
//         ];
//         return view('list_product', compact('data'));
//     }
// }

