<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\medicine;
use App\Models\medicines;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
{
    return view('backend.layout.dashboard');
}
    public function product()
{
    return view('backend.layout.product');
}
public function order()
{
    return view('backend.layout.order');
}
public function sales()
{
    return view('backend.layout.sales');
}
public function update()
{
    return view('backend.layout.update');
}
public function customer()
{
    $users=User::all();
    return view('backend.layout.customer',compact('users'));
}
    public function category()
{
    $medicines=medicines::all();
    return view('backend.layout.category',compact('medicines'));
}
public function master()
{
    return view('backend.layout.dashboard');
}
public function medicines(Request $request)
{
   $request->validate(
    [
        'medicine_name'=>['required'],
        'generic_name'=>['required'],
        'quantity'=>['required'],
        'expiry_date'=>['required'],
        'price'=>['required'],

    ]
    );
    $filename='';
    if($request->hasFile('upload')){
        $file=$request->file('upload');
        if($file->isValid()){
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('medicine',$filename);
        }
    }
    medicines::create([
    'medicine_name'=>$request->medicine_name,
    'generic_name'=>$request->generic_name,
    'brand_name'=>$request->brand_name,
    'quantity'=>$request->quantity,
    'expiry_date'=>$request->expiry_date,
    'price'=>$request->price,
    'specification'=>$request->specification,
    'upload'=>$filename,
   ]);
return redirect()->back();
    
}
}
