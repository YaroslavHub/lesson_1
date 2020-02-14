<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('images') -> get();
        return view('images.list',['imgs' =>$images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $title = $request ->input('im_title');
        $alt = $request -> input('im_alt');
        $file = $request -> file('im_file');
        $path = $file -> store('public'); 
        $url = str_replace('public/' , '/storage/' , $path);
        Db::table('images') -> insertGetId([
        'url'=>$url,
        'filename' => $path,
        'alt' => $title . '(' . $alt .')'
        ]);
        return redirect('/image-manager');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = DB::table('images') -> find($id);
        return view('images.show',['img'=>$images]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = DB::table('images') -> find($id);
        return view('images.edit',[ 'img' => $image ]);

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
        
        $alt = $request->input('name_alt');
        $filename = $request->file('name_alternative');
        $url = $request->input('name_url');

        /*
        $title = $request ->input('name_alt');
        $alt = $request -> input('name_alternative');
        $file = $request -> file('name_url');
        $path = $file -> store('public'); 
        */
        return redirect('/image-manager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('images')
        ->where('id','=',$id)
        ->delete();
        return redirect('/image-manager/');
    }
}
