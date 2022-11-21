<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\medicine;
use App\Models\medicines;
use App\Models\orderlist;
use App\Models\sub_orderlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    $odr=orderlist::all();
    return view('backend.layout.order', compact('odr'));
}
public function sub_order()
{
    $sub=sub_orderlist::all();
    return view('backend.layout.sub_orderlist', compact('sub'));
}
public function sales()
{
    return view('backend.layout.sales');
}
public function master()
{
    return view('backend.layout.dashboard');
}

public function category()
{
    $medicines=medicines::all();
    return view('backend.layout.category',compact('medicines'));
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
public function editmed($id){
    $med=medicines::find($id);
// dd($med);
    return view('backend.layout.update',compact('med'));
}
public function updatemed(Request $request)
{
    // dd($request->all());
   $med=medicines::find($request->id);
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
    medicines::find($request->id)->update([
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
public function deletemed($id){

    $med=medicines::find($id)->delete();
    return redirect()->back();
}

public function customer()
{
    $users=User::all();
    return view('backend.layout.customer',compact('users'));
}

public function adminprofile()
{
  $users=User::all();  
  return view('backend.layout.adminprofile',compact('users'));

}
public function editadmin($id){
 
    $cus=User::find($id);
    return view('backend.layout.updateadmin',compact('cus'));
  }
public function updateadmin(Request $request)
{
    dd($request->all());
    $cus=User::find($request->id);
  
    $filename='';
    if($request->hasFile('upload')){
        $file=$request->file('upload');
        if($file->isValid()){
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('profile',$filename);
        }
    }
    User::find($request->id)->update([
      'upload'=>$filename,
      'name'=>$request->name,
      'phone'=>$request->phone,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
   ]);
  return redirect()->back();
    
}


}
