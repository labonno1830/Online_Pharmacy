<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\doctor;
use App\Models\medicines;
use App\Models\orderlist;
use App\Models\sub_orderlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
  public function login()
  {
    return view('login');
  }
  public function homepage()
  {
    $medicines = medicines::orderBy('id','desc')->get();
    return view('frontend.layout.homepage', compact('medicines'));
  }


  public function doctors_info()
  {
    $doctors=doctor::all();
    return view('frontend.layout.doctors_info' , compact('doctors'));
  }

  public function searchmed(Request $request)
  {

    if ($request->search) {
      $searchmed = medicines::where('medicine_name', 'LIKE', '%' . $request->search . '%')->latest()->paginate(15);
      return view('frontend.layout.search', compact('searchmed'));
    } else {
      return redirect()->back()->with('message', 'Empty Search');
    }
  }

  public function registration()
  {
    return view('registration');
  }
  public function details($id)
  {
    $medicine = medicines::find($id);
    return view('frontend.layout.details', compact('medicine'));
  }
  public function cart()
  {
    $cart = Cart::content();
    // dd($cart);
    return view('frontend.layout.cart', compact('cart'));
  }
  

  public function userdashboard()
  {
    $users = Auth::user();
    $orders = orderlist::all();
    return view('frontend.layout.userdashboard', compact('users', 'orders'));
  }


  public function register(Request $request)
  {
    $request->validate(
      [
        'upload'=>['required'],
        'name'=>['required'],
        'phone'=>['required'],
        'email'=>['required'],
        'password'=>['required'],
  
      ]
      );
    $filename = '';
    if ($request->hasFile('upload')) {
      $file = $request->file('upload');
      if ($file->isValid()) {
        $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
        $file->storeAs('profile', $filename);
      }
    }

    User::create([
      'upload' => $filename,
      'name' => $request->name,
      'phone' => $request->phone,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);
    return redirect()->route('login');
  }
  public function edituser($id)
  {

    $cus = User::find($id);
    return view('frontend.layout.updateuser', compact('cus'));
  }
  public function updateuser(Request $request)
  {
    // dd($request->all());
    $cus = User::find($request->id);

    $filename = '';
    if ($request->hasFile('upload')) {
      $file = $request->file('upload');
      if ($file->isValid()) {
        $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
        $file->storeAs('profile', $filename);
      }
    }
    User::find($request->id)->update([
      'upload' => $filename,
      'name' => $request->name,
      'phone' => $request->phone,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);
    return redirect('/userdashboard');
  }

  public function login_post(Request $request)
  {

    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      if (Auth::user()->role_id == 1) {
        return redirect()->route('dashboard')->with('message', 'Login Successful');
      } elseif (Auth::user()->role_id == 2) {
        return redirect()->route('homepage')->with('message', 'login successfull');
      }
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
  }
  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/');
  }
  public function addtocart($id)
  {
    $med = medicines::find($id);
    Cart::add([
      [
        'id' => $med->id,
        'name' => $med->medicine_name,
        'qty' => 1,
        'price' => $med->price,
        'weight' => 1,
        'options' => ['upload' => $med->upload]
      ]
    ]);
    return redirect()->back();
  }
  public function order(Request $request)
  {
    $cart = Cart::content();
    $sub_total = Cart::subtotal();
    $grand_total = Cart::subtotal() + 50;
    $invoice_word = 'ASDFGHJKLQWERTYUIOPZXCVBNM1234567890';
    $invoice_shuffle = str_shuffle($invoice_word);
    $invoice = substr($invoice_shuffle,0,5);
    $order = orderlist::create([
      'invoice_id' => $invoice,
      'name' => $request->name,
      'phone' => $request->phone,
      'total' => $grand_total,
      'address' => $request->address,
    ]);
    // dd($order);

    foreach ($cart as $data) {
      sub_orderlist::create([
        'med_name' => $data->name,
        'order_id' => $order->id,
        'quantity' => $data->qty,
        'price' => $data->price,
        'sub_total' => $sub_total,
      ]);
      $medicines = medicines::where('medicine_name', '=', $data->name)->get();
      foreach ($medicines as $key => $medicine) {
        $med_quantity = (float)str_replace(',', '', $medicine->quantity) - $data->qty;
        medicines::where('medicine_name', '=', $data->name)->update([
          'quantity' => $med_quantity
        ]);
      }
    }

    Cart::destroy();
    return redirect()->route('homepage')->with('message', 'Your order has been placed and you can check your order information from userdashboard');
  }

  public function qtyUpdate(Request $request){
    cart::update($request->row_id, $request->quantity);
    return back();
  }
  public function deleteodr($id)
  {
    Cart::remove($id);
    return back();
  }
  public function user_sub_orders($id)
{
    $sub=sub_orderlist::where('order_id',$id)->get();
    return view('frontend.layout.user_sub_orders', compact('sub'));
}

  
  public function cus_invoice($id){

    $order = orderlist::find($id);
    $sub_orders= sub_orderlist::where('order_id',$id)->get();
    $grand_total = Cart::subtotal() + 50;
    // dd($order);
    return view('frontend.layout.cus_invoice',compact('order','sub_orders'));
  }
  public function see_more($id)
  {
    $cat=category::find($id);
    $medicines = medicines::where('category_id',$id)->get();
    return view('frontend.layout.see_more',compact('cat','medicines'));
  }

}

