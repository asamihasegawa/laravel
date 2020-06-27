<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stockist;
use Validator;

class StockistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = stockist::all();
      return view('admin.stockist.stockist', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $stockist = new Stockist;
      $form = $request->all();


      $rules = [
          'id' => 'integer|required',
          'name' => 'required',
          'tel' => 'required',
          'address' => 'required',
      ];
      $message = [
          'id.integer' => 'System Error',
          'id.required' => 'System Error',
          'name.required'=> 'nameが入力されていません',
          'tel.required'=> 'telが入力されていません',
          'address.required'=> 'addressが入力されていません',
      ];
      $validator = Validator::make($form, $rules, $message);

      if($validator->fails()){
          return redirect('/admin/stockist')
              ->withErrors($validator)
              ->withInput();
      }else{
          unset($form['_token']);
          $stockist->id = $request->id;
          $stockist->name = $request->name;
          $stockist->tel = $request->tel;
          $stockist->address = $request->address;
          $stockist->save();
          return redirect('/admin/stockist');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Stockist::find($id);
      return view('admin.stockist.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $items = Stockist::find($id)->delete();
      return redirect('/admin/stockist');
    }
}
