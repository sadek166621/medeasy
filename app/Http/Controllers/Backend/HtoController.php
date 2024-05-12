<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hto;

class HtoController extends Controller
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
      $hto = Hto::first();
        return view('Backend.Hto.form',compact('hto'));
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
        // return $id;
      $hto = Hto::find($id);
        // //hto Photo Update
        if($request->hasfile('image')){
            try {
                if(file_exists($hto->image)){
                    unlink($hto->image);
                }
            } catch (Exception $e) {

            }
            $image = $request->image;
            $hto_save = time().$image->getClientOriginalName();
            $image->move('upload/hto/',$hto_save);
            $hto->image = 'upload/hto/'.$hto_save;
        }else{
           $hto_save = '';
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $hto->status = $request->status;
        $hto->text = $request->text;
        $hto->youtube_link = $request->youtube_link;
        $hto->update();

        $notification = array(
            'message' => 'How To Order Updated Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('how-to-order.create')->with($notification);
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
