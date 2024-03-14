<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use Symfony\Component\HttpFoundation\Session;

class LoginController extends Controller
{
    //
    public function signUp_view()
    {

        return view('home.signUp');
    }
    public function signUp_create(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password'  =>  'required|between:2,255|same:confirmPassword',
            'confirmPassword'  =>  'required',

        ]);


        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
                // ,'error' => $error->errors()->all()
            ]);
        }
        $emailPhone = $request->email;
        $phone = preg_match('/^\d{10}$/', $emailPhone);
        $email = filter_var($emailPhone, FILTER_VALIDATE_EMAIL);
        // print_r($email);  die();
        // return $email;


        $customers = new User();
        $customers->name = $request->name;
        $customers->password = $request->password;
        $customers->role = "Customer";
        $customers->status = 1;
        if (is_numeric($emailPhone)) {
            if ($phone) {
                $customers->mobile = $emailPhone;
                $customers->email = bcrypt(rand(100, 999));
            }
            $error = "invalid phone address.";
            if ($phone != true || $phone != true) {
                return response()->json([
                    // 'error' => $validator->errors()->all()
                    'error' => $error
                ]);
            }
        } else {
            if ($email) {
                $customers->email = $emailPhone;
                $customers->mobile = bcrypt(rand(100, 999));
            }
            $error = "invalid email address.";
            if ($email != true) {
                return response()->json([
                    // 'error' => $validator->errors()->all()
                    'error' => $error
                ]);
            }
        }


        // return $customers;
        $customers->save();

        return response()->json(['success' => ' successfully posted.']);
    }

    public function customer_login_viwe()
    {
        return view('home.cust_login');
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
            if (Auth::check()) {

                $session_id = \Session::getId();
                $cartObj = \Cart::session('_token')->getContent();

                if (\Auth::guest()) {
                    session()->flash('guest_cart', [
                        'session' => $session_id,
                        'data' => $cartObj
                    ]);
                }

                return redirect()->intended('cart')->withSuccess('You have logged In successfully!');
                // dd(Auth::check());
                // dd(session()->all());   
            }
        } else {
            return 0;
            // return redirect()->intended('/admin')->withSuccess('You have logged In successfully!');
            return redirect('login_view')->withError('Invalid Email address or Password');
        }
        // print_r($request);
        // die("dhgf");
    }


    protected function authenticated(Request $request, $user)
    {
        if (Auth::check()) {
            //assuming that you have a cart relationship with user.
            $cartData = Auth::user()->cart()->getContent();
            $request->session()->put('cart_data', $cartData);
        }

        return redirect()->intended($this->redirectPath());
    }


    // {
    //     if(Auth::check()){

    //         $session_id = \Session::getId();
    //         $cartObj = \Cart::session($session_id)->getContent();

    //           if (\Auth::guest()) {
    //               session()->flash('guest_cart', [
    //                   'session' => $session_id,
    //                   'data' => $cartObj
    //               ]);
    //           }

    //           return redirect()->intended('/')->withSuccess('You have logged In successfully!');
    //         dd(session()->all());   
    //     }
    // }

    // session()->flash('guest_cart', [
    //     'session' => session()->getId(),
    //     'data' => cart()->getContent()
    // ]);
}
