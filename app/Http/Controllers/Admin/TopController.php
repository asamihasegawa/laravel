<?php

namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Auth;
use App\Http\Controllers\Controller;
use App\Top;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TopController extends Controller
{
    public function upload(Reqest $request){
      $validator = Validator::make($request->all(), [
           'file' => 'required|max:10240|mimes:jpeg,gif,png'
       ]);
       if($validator->fails()){
         return back()->withInput()->withErrors($validator);
       }
       $file = $request->file('file');
        $path = Storage::disk('s3')->putFile('/', $file, 'public');

        Post::create([
            'image_file_name' => $path
        ]);

        return redirect('/admin/top');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = \App\Top::all();

      $data = [
          'posts' => $posts,
      ];

      return view('admin.top',$data);
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
