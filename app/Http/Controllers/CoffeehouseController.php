<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coffeehouse;

class CoffeehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coffeehouses=Coffeehouse::all();
        return view('coffee-house',compact('coffeehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add-coffee-house');
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
          'place'=>'required',
          'image1'=>'required',
          'image2'=>'required'
        ]);

        $image1 = $request->file('image1');

        $input['imagename1'] = time().'.'.$image1->getClientOriginalExtension();

        $destinationPath1 = public_path('/img');

        $image1->move($destinationPath1, $input['imagename1']);

        $image2 = $request->file('image2');

        $input['imagename2'] = time().'.'.$image2->getClientOriginalExtension();

        $image2->move($destinationPath1, $input['imagename2']);

        Coffeehouse::create([
          'place'=>request('place'),
          'image1'=>$input['imagename1'],
          'image2'=>$input['imagename2']
        ]);
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
