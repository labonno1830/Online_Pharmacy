<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\doc_category;
use App\Models\doctor;
use App\Models\medicine;
use App\Models\medicines;
use App\Models\orderlist;
use App\Models\sub_orderlist;
use App\Models\supplier;
use App\Models\User;
use File;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
{
    $medi=medicines::count();
    $customer=User::where('role_id',2)->count();
    $category=category::count();
    $doc_cat=doc_category::count();
    $od=orderlist::count();
    $doc=doctor::count();
    $supp=supplier::count();
    return view('backend.layout.dashboard',compact('medi','customer','od','doc','supp','category','doc_cat'));
}
public function product()
{
     return view('backend.layout.product'); 
}

public function order()
{
    $odr=orderlist::orderBy('id','desc')->get();
    return view('backend.layout.order', compact('odr'));
}
public function orderStatus($id)
{
    $order_id=orderlist::find($id);
    if ($order_id->status == 0) {
        $updateStatus= 1;
        $order_id->update(
            [
            'status'=> $updateStatus
            ]
        );
    }else {
        $updateStatus= 0;
        $order_id->update(
            [
            'status'=> $updateStatus
            ]
        );
    }
    return redirect()->back();
}
public function invoice($id){

    $order = orderlist::find($id);
    $sub_orders= sub_orderlist::where('order_id',$id)->get();
    $grand_total = Cart::subtotal() + 50;
    // dd($order);
    return view('backend.layout.invoice',compact('order','sub_orders'));
  }

public function sub_order($id)
{
    $sub=sub_orderlist::where('order_id',$id)->get();
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
            'email'=>['required','unique:users'],
        ]
        );
        supplier::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
           ]);
        return redirect()->back();

}

public function editsup($id)
  {

    $suppl = supplier::find($id);
    return view('backend.layout.updatesup', compact('suppl'));
  }
  public function updatesup(Request $request)
  {
    // dd($request->all());
    $request->validate(
      [
            'name'=>['required'],
            'phone'=>['required'],
            'email'=>['required'],
  
      ]
      );
    $suppl = supplier::find($request->id);
    
   
    supplier::find($request->id)->update([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
    ]);
    return redirect('/supplier');
  }


public function delete_supplier($id){

    $suppliers=supplier::find($id)->delete();
    return redirect()->back();
}
public function doctor()
{
    $doctors=doctor::all();
    $cate=doc_category::all();
    return view('backend.layout.doctor', compact('doctors','cate'));
}
public function doctors(Request $request)
{
    $request->validate(
        [
            'name'=>['required'],
            'cate_id'=>['required','integer'],
            'hospital'=>['required'],
            'phone'=>['required'],
            'time'=>['required'],
            'days'=>['required'],
        ]
        );
        doctor::create([
            'name'=>$request->name,
            'cate_id'=>$request->cate_id,
            'hospital'=>$request->hospital,
            'phone'=>$request->phone,
            'time'=>$request->time,
            'days'=>$request->days,
           ]);
        return redirect()->back();

}

public function editdoc($id)
  {

    $doct = doctor::find($id);
    $cate=doc_category::all();
    return view('backend.layout.updatedoc', compact('doct','cate'));
  }
  public function updatedoc(Request $request)
  {
    // dd($request->all());
    $request->validate(
      [
        'name'=>['required'],
        'cate_id'=>['required','integer'],
        'hospital'=>['required'],
        'phone'=>['required'],
        'time'=>['required'],
        'days'=>['required'],
  
      ]
      );
    $doct = doctor::find($request->id);
    $cate=doc_category::all();
   
    doctor::find($request->id)->update([
            'name'=>$request->name,
            'cate_id'=>$request->cate_id,
            'hospital'=>$request->hospital,
            'phone'=>$request->phone,
            'time'=>$request->time,
            'days'=>$request->days,
    ]);
    return redirect('/doctor');
  }

public function delete_doctor($id){

    $doctors = doctor::find($id)->delete();
    return redirect()->back();
}

public function adminmaster()
{
    return view('backend.layout.dashboard');
}

public function add_medicine(Request $request)
{
    if($request->search != null){
        $medicines = medicines::where('medicine_name','LIKE', $request->search . '%')->get();
    }
    else{
        $medicines=medicines::all();
       
    }
     $suppliers=supplier::all();
     $cat=category::all();
    return view('backend.layout.add_medicine',compact('medicines' ,'suppliers','cat'));
}
public function medicines(Request $request)
{
    $request->validate(
        [
            'medicine_name'=>['required','unique:medicines'],
            'generic_name'=>['required'],
            'brand_name'=>['required'],
            'quantity'=>['required'],
            'expiry_date'=>['required'],
            'price'=>['required'],
            'specification'=>['required'],
            'supplier'=>['required','integer'],
            'category'=>['required','integer'],
            'upload'=>['required','image','mimes:jpeg,png,jpg'],
            
            ]
        );
        // dd($request->all());
        
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
        'supplier_id'=>$request->supplier,
        'category_id'=>$request->category,
        'upload'=>$filename,
        'status' => 1
   ]);
return redirect()->back();
}



public function add_category()
{
    $cat=category::all();
    return view('backend.layout.category', compact('cat'));

}
public function category(Request $request)
{
    $request->validate(
        [
            'name'=>['required'],
        ]
        );
        category::create([
            'name'=>$request->name,
           ]);
        return redirect()->back();
}

public function add_doc_category()
{
    $cate=doc_category::all();
    return view('backend.layout.doc_category', compact('cate'));

}
public function doc_category(Request $request)
{
    $request->validate(
        [
            'name'=>['required'],
        ]
        );
        doc_category::create([
            'name'=>$request->name,
           ]);
        return redirect()->back();
}
    

public function editmed($id){
    $med=medicines::find($id);
    $suppliers=supplier::all();
    $cat=category::all();
// dd($med);
    return view('backend.layout.update',compact('med','suppliers','cat'));
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
            'supplier'=>['required','integer'],
            'category'=>['required','integer'],
            'upload'=>['required','image','mimes:jpeg,png,jpg'],
    ]
    );
    
    $filename = $med->upload;
    if($request->hasFile('upload'))
    {
        $destination = 'uploads/medicine/'.$med->upload;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('upload');
        if($file->isValid())
        {
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
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
    'supplier_id'=>$request->supplier,
    'category_id'=>$request->category,
    'upload'=>$filename,
    'status' => 1
   ]);
 return redirect('/add_medicine');
    
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
    // dd($request->all());
    $request->validate(
        [
          'upload'=>['required','image','mimes:jpeg,png,jpg'],
          'name'=>['required'],
          'phone'=>['required'],
          'email'=>['required'],
          'password'=>['required'],
    
        ]
        );
    $cus=User::find($request->id);
    $filename = $cus->upload;
    if($request->hasFile('upload'))
    {
        $destination = 'uploads/profile/'.$cus->upload;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('upload');
        if($file->isValid())
        {
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
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
  return redirect('/adminprofile');
    
}


}