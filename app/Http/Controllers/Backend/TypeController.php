<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use Session;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['types'] = Type::orderBy('id','desc')->get();
        return view('backend.type.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.type.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        type::create([
            'name'=>$request->name,
            'status'=>$request->status == 1 ?'1' : '0',
        ]);

        Session::flash('success','Type Created Successfully');
        return redirect()->route('type.index');
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
       $type = type::find($id);
       return view('backend.type.form',compact('type'));
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
        $type = type::find($id);
        $type->update([
            'name'=>$request->name,
            'status'=>$request->status == 1 ?'1' : '0',
        ]);

        Session::flash('success','Type Updated Successfully');
        return redirect()->route('type.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!demo_mode()){
            $type = type::findOrFail($id);
            $type->delete();
            Session::flash('success','Type has been deleted successfully');
            return redirect()->route('type.index');
        }else{
            $notification = array(
                'message' => 'Type can not be deleted on demo mode.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function active($id){
        $type = type::find($id);
        $type->status = 1;
        $type->save();
        Session::flash('success','Type Activated Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $type = type::find($id);
        $type->status = 0;
        $type->save();
        Session::flash('success','Type Inactivated Successfully.');
        return redirect()->back();
    }
}
