<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BrandController;

class LandingController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }
    //
    public function index()
    {
      // code...
      $bc=new BrandController();
      $brands=$bc->index();
      return view( 'landing',compact('brands'));

    }
}
