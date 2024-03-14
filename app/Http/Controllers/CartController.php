<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function cartList()
    {
        // return 1;
        $items = 1;
        $cartItems = \Cart::session('_token')->getContent();
        // setcookie('cartItems', 'serialize($cartItems)', time() + 60*100000, '/'); 
    //    $newarray = serialize($_COOKIE['cartItems']);
    //    setcookie('cart', 'serialize($cart)', time() - 60*100000, '/');
        // $cartItems =Cart::all();
        // echo "<pre>";
        // print_r($cartItems);
        // die();
        // dd($newarray);
        
        return view('home.cart.cart', ['cartItems' => $cartItems,'items' => $items]);
    }


    public function cartLists()
    {
      
        $cartItems =Cart::all();
        // echo "<pre>";
        // print_r($cartItems);
        // die();
        // dd($newarray);
        
        return view('Frontend.shop', ['cartItems' => $cartItems]);
    }


    public function cartListCount()
    {
        $cartItems = \Cart::getCount();
        // dd($cartItems);
        return view('index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        
        
     $cart =  
      \Cart::session('_token')->add([
            'id' => $request->id,
            'name' => $request->product_name,
            'price' => $request->product_price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->product_image,
            )
        ]);

    //    dd($cart);
        
        // $user = new Cart();
        // $user->product_name = $request->product_name;
        // $user->product_price = $request->product_price; 
        // $user->quantity = $request->quantity; 
        // $user->save();

        session()->flash('success', 'Product is Added to Cart Successfully !');
        // return redirect()->back();
        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        // $ticket =DB::table('tickets')
        // -> leftJoin('gp_group','tickets.id', '=','gp_group.ticket_id')
        //  -> where('tickets.id',$ticket);
        //  DB::table('gp_group')->where('ticket_id',$ticket)->delete();
        //  $ticket->delete(); 

        \Cart::session('_token')->remove($request->id);
      
        session()->flash('success', 'Item Cart Remove Successfully !');


        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function cart_delete($id)
    {
        // return 1;
       
            Cart::find($id)->delete();
        //  return $product;
        return redirect()->route('cart.list');
    }

    public function customer_login(Request $request)
    {
        //   return 1;

        $credentials = $request->validate([
            'email' => ['required'],
            //    'phone' => ['required'],
            'password' => ['required'],
        ]);



        $login = request()->input('email');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        request()->merge([$fieldType => $login]);

        // $remember_me = $request->has('remember_me') ? true : false;

        // $check = $request->only($fieldType ,'password');


        if (
            Auth::attempt(['mobile' => request('email'), 'password' => request('password')]) ||
            Auth::attempt(['email' => request('email'), 'password' => request('password')]) ||
            Auth::attempt(['name' => request('name'), 'password' => request('password')])
            //   || 
            //  Auth::attempt(['anyOtherField' => request('anyOtherField'), 'password' => request('password')]) 
        )
        // (Auth::attempt($credentials, $check)) 
        {

            $request->session()->regenerate();

            // //    return 1;
            // return redirect()->intended('/')->withSuccess('You have logged In successfully!');
            if(Auth::check()){
    
                $session_id = \Session::getId();
                $cartObj = \Cart::session($session_id)->getContent();
        
                  if (\Auth::guest()) {
                      session()->flash('guest_cart', [
                          'session' => $session_id,
                          'data' => $cartObj
                      ]);
                  }
        
                //   return redirect()->intended('/')->withSuccess('You have logged In successfully!');
                dd($cartObj);
                dd(session()->all());   
            }
        } else {
            return 0;
            // return redirect()->intended('/admin')->withSuccess('You have logged In successfully!');
            return redirect('login_view')->withError('Invalid Email address or Password');
        }
        // print_r($request);
        // die("dhgf");
    }
}