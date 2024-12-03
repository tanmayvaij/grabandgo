<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        $productModel = new ProductModel();

        $products = $productModel->findAll();

        return view('index', [ "products" => $products ]);
    }

    public function singleProduct($productId): string
    {
        $productModel = new ProductModel();

        $product = $productModel->find($productId);

        return view('product', [ "product" => $product ]);
    }

}
