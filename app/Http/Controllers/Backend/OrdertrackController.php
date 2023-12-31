<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Ordertrack;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use File;
use Toastr;

class OrdertrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Ordertrack::oldest()->paginate(5);
        return view('backend.ordertrack.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shipment=Shipment::get();
        return view('backend.ordertrack.create',compact('shipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data=new Ordertrack();
            $data->user_id=currentUserId();
            $data->shipment_id=$request->shipment_id;
            $data->comment=$request->comment;
            
            if($data->save()){
                $shipment=Shipment::find($request->shipment_id);
                $shipment->status=$request->status;
                $shipment->save();
                return redirect()->route('ordertrack.index')->with('success','Successfully saved');
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ordertrack=ordertrack::findOrFail(encryptor('decrypt',$id));
        return view('backend.ordertrack.show', compact('ordertrack'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::get();
        $shipment=Shipment::get();
        $ordertrack=ordertrack::findOrFail(encryptor('decrypt',$id));
        return view('backend.ordertrack.edit',compact('ordertrack','user','shipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
            try{  
                $data=Ordertrack::findOrFail(encryptor('decrypt',$id));
                $data->shipment_id=$request->shipment_id;
                $data->comment=$request->comment;
                $data->status=$request->status;
                if($data->save()){
                    Toastr::success('Successfully updated');
                    return redirect()->route('ordertrack.index');
                }
            }catch(Exception $e){
                Toastr::error('Please try again');
                // dd($e);
                return redirect()->back()->withInput();
            }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Ordertrack::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){   
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}