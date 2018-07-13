<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\BrandController;

class ShopController extends Controller
{
    //
    public function index()
    {
        //
        $products=Product::all();
        $bc=new BrandController();
        $brands=$bc->index();
        $sh['products']=$products;
        $sh['brands']=$brands;
        return view('shop.shop',compact('sh'));
    }
}
