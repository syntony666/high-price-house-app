<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Items\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    public function store(ProductRequest $request): Response
    {    
        $product = Product::create($request->all());

        return response($product, Response::HTTP_CREATED);
    }

    public function show(Product $product): Response
    {
        return response($product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
