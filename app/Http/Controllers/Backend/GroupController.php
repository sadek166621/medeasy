<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use Session;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['groups'] = Group::orderBy('id','desc')->get();
        return view('backend.group.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.group.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        group::create([
            'name'=>$request->name,
            'status'=>$request->status == 1 ?'1' : '0',
        ]);

        Session::flash('success','Group Created Successfully');
        return redirect()->route('group.index');
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
       $group = group::find($id);
       return view('backend.group.form',compact('group'));
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
        $group = group::find($id);
        $group->update([
            'name'=>$request->name,
            'status'=>$request->status == 1 ?'1' : '0',
        ]);

        Session::flash('success','Group Updated Successfully');
        return redirect()->route('group.index');

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
            $group = group::findOrFail($id);
            $group->delete();
            Session::flash('success','Group has been deleted successfully');
            return redirect()->route('group.index');
        }else{
            $notification = array(
                'message' => 'Group can not be deleted on demo mode.',
                'alert-group' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function active($id){
        $group = group::find($id);
        $group->status = 1;
        $group->save();
        Session::flash('success','Group Activated Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $group = group::find($id);
        $group->status = 0;
        $group->save();
        Session::flash('success','Group Inactivated Successfully.');
        return redirect()->back();
    }
}
