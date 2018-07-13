<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
          'name'=>'required',
          'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $image = $request->file('image');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/img');

        $image->move($destinationPath, $input['imagename']);


    //$this->postImage->add($input);
        Product::create([
          'name'=>request('name'),
          'weight'=>request('weight'),
          'price'=>request('price'),
          'image'=>$input['imagename'],
          'quantity'=>request('quantity'),
          'description'=>request('description')

        ]);
        // return redirect('/shop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('shop.product-view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('shop.edit-product',compact('id','product'));
    }
    public function editimage($id)
    {
        //
        $product = Product::find($id);
        return view('shop.edit-product-image',compact('id','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        if (request('image')) {
          // code...
          $this->validate($request, [

            'image'=>'image|mimes:jpeg,png,jpg,gif,svg'
          ]);
          $image = $request->file('image');

          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destinationPath = public_path('/img');

          $image->move($destinationPath, $input['imagename']);
          $product->update(['image'=>$input['imagename']]);
        }else{

    //$this->postImage->add($input);
    // 'image'=>$input['imagename'],

    $this->validate($request, [
      'name'=>'required',
      'description'=>'required',
      'weight'=>'required',
      'price'=>'required'
    ]);
        $product->update(['name'=>request('name'),'weight'=>request('weight'),'price'=>request('price'),'quantity'=>request('quantity'),'description'=>request('description')]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
