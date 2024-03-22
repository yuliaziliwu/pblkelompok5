<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData()
    {
        $data = [
            ['id' => 1, 'produk'=> 'Moisturizer', 'merk'=> 'Hadalabo', 'harga' =>100000],
            ['id' => 2, 'produk'=> 'Sunscreen', 'merk'=> 'SkinAqua', 'harga' =>50000],
            ['id' => 3, 'produk'=> 'Face Mist', 'merk'=> 'Saffron', 'harga' =>9000],
            ['id' => 4, 'produk'=> 'Face Wash', 'merk'=> 'Hadalabo Shyirojyun', 'harga' =>36000],
            ['id' => 4, 'produk'=> 'Lip Balm', 'merk'=> 'Pure Paw Paw', 'harga' =>55000],
            ['id' => 4, 'produk'=> 'Lip Cream', 'merk'=> 'Hanasui', 'harga' =>56000],
        ];
        return $data;
    }

    public function list_Product()
    {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
};
