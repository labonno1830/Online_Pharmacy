<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use App\Models\medicine;
use App\Models\medicines;
use App\Models\orderlist;
use App\Models\sub_orderlist;
use App\Models\supplier;
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

public function sub_order($id)
{
    $sub=sub_orderlist::find($id);
    return view('backend.layout.sub_orderlist', compact('sub'));
}
public function supplier()
{
    $suppliers=supplier::all();
    return view('backend.layout.supplier', compact('suppliers'));
}
public function suppliers(Request $request)
{
    $request->validate(
        [
            'name'=>['required'],
            'phone'=>['required'],
            'email'=>['required'],
        ]
        );
        supplier::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
           ]);
        return redirect()->back();

}
public function delete_supplier($id){

    $suppliers=supplier::find($id)->delete();
    return redirect()->back();
}
public function doctor()
{
    $doctors=doctor::all();
    return view('backend.layout.doctor', compact('doctors'));
}
public function doctors(Request $request)
{
    $request->validate(
        [
            'name'=>['required'],
            'department'=>['required'],
            'hospital'=>['required'],
            'phone'=>['required'],
            'time'=>['required'],
            'days'=>['required'],
        ]
        );
        doctor::create([
            'name'=>$request->name,
            'department'=>$request->department,
            'hospital'=>$request->hospital,
            'phone'=>$request->phone,
            'time'=>$request->time,
            'days'=>$request->days,
           ]);
        return redirect()->back();

}
public function delete_doctor($id){

    $doctors=doctor::find($id)->delete();
    return redirect()->back();
}

public function master()
{
    return view('backend.layout.dashboard');
}

public function add_medicine()
{
    $medicines=medicines::all();
    $suppliers=supplier::all();
    return view('backend.layout.add_medicine',compact('medicines' ,'suppliers'));
}
public function medicines(Request $request)
{
   $request->validate(
    [
        'medicine_name'=>['required'],
        'generic_name'=>['required'],
        'brand_name'=>['required'],
        'quantity'=>['required'],
        'expiry_date'=>['required'],
        'price'=>['required'],
        'specification'=>['required'],
        'supplier'=>['required'],
        'category'=>['required'],
        'upload'=>['required'],

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
    $suppliers=supplier::all();
// dd($med);
    return view('backend.layout.update',compact('med','suppliers'));
}
public function updatemed(Request $request)
{
    // dd($request->all());
   $med=medicines::find($request->id);
   
    $request->validate(
    [
        'medicine_name'=>['required'],
        'generic_name'=>['required'],
        'brand_name'=>['required'],
        'quantity'=>['required'],
        'expiry_date'=>['required'],
        'price'=>['required'],
        'specification'=>['required'],
        'upload'=>['required'],
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
    'supplier'=>$request->supplier,
    'category'=>$request->category,
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
