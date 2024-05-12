<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\BestPharmacy;
use Image;
use Session;

class BestPharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['pharmacies'] = BestPharmacy::orderBy('id','desc')->get();
        return view('backend.best-pharmacy.list',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.best-pharmacy.form');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        if($request->hasfile('pharmacy_img')){
            $img = $request->file('pharmacy_img');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->save('upload/pharmacy/'.$name_gen);
            $save_url = 'upload/pharmacy/'.$name_gen;
        }else{
            $save_url = '';
        }
        $pharmacy = new BestPharmacy();
        if($request->status == Null){
            $request->status = 0;
        }
        $pharmacy->status = $request->status;
        $pharmacy->description = $request->description;
        $pharmacy->pharmacy_img = $save_url;
        $pharmacy->save();

        Session::flash('success','Best Pharmacy Added Successfully');
        return redirect()->route('best-pharmacy.index');

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
        $data['pharmacy'] = BestPharmacy::find($id);
        return view('backend.best-pharmacy.form',$data);
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
        $pharmacy = BestPharmacy::find($id);
        // //pharmacy Photo Update
        if($request->hasfile('pharmacy_img')){
            try {
                if(file_exists($pharmacy->pharmacy_img)){
                    unlink($pharmacy->pharmacy_img);
                }
            } catch (Exception $e) {

            }
            $pharmacy_img = $request->pharmacy_img;
            $pharmacy_save = time().$pharmacy_img->getClientOriginalName();
            $pharmacy_img->move('upload/pharmacy/',$pharmacy_save);
            $pharmacy->pharmacy_img = 'upload/pharmacy/'.$pharmacy_save;
        }else{
           $pharmacy_save = '';
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $pharmacy->status = $request->status;
        $pharmacy->description = $request->description;
        $pharmacy->update();

        $notification = array(
            'message' => 'Best Pharmacy Updated Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('best-pharmacy.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacy = BestPharmacy::find($id);
        $pharmacy->delete();
        $notification = array(
            'message' => 'Best Pharmacy Deleted Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route('best-pharmacy.index')->with($notification);

    }
}
