<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   public function __construct()
   {
      // $this->middleware('auth')
      // ->except([
      //     'logout', '/table'
      // ]);
   }

   public function login_view()
   {
      return view('pages.login');
   }
   public function authenticate(Request $request)
   {      
      $credentials = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
      ]);

      $remember_me = $request->has('remember_me') ? true : false;
      $check = $request->only('username', 'password');
      if (Auth::attempt($credentials, $check, $remember_me)) {
         $request->session()->regenerate();
         return redirect()->intended('/admin')->withSuccess('You have logged In successfully!');
      } else {
         return redirect('login_view')->withError('Invalid Email address or Password');
      }
   }

   
   public function register_view()
   {
      return view('pages.register');
   }

   public function register_create(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'name' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required',
         'role' => 'required',
      ]);     

      if ($validator->fails()) {
         return response()->json([
            'error' => $validator->errors()->all()
         ]);
      }
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->role = $request->role;
      // $user->password = bcrypt($user['password']);
      // echo "<pre>"; print_r($user); die('test');
      $user->save();
      return response()->json(['success' => 'Post created successfully.']);

   }


   public function index()
   {
      // $user = Product::with('contacts')->where('id', $id)->first();
      $user = User::all();
      $product = Product::all()->count();
      $products = Product::orderBy('id', 'DESC')->paginate(5);
      $contact = Contact::all()->count();
      $contact = Contact::all()->count();
      // return $products;
      return view('index', ['product' => $product, 'user' => $user, 'contact' => $contact, 'products' => $products]);
   }

   public function table_view()
   {
      $user = User::all();
      if (Auth::check()) {
         if (Auth::user()->role == 'Admin') {
            return view('pages.user_list', ['user' =>  $user]);
         } elseif (Auth::user()->role == 'User') {
            return view('pages.user_list', ['user' =>  $user]);
         } else {
            return "Role not Found";
         }
      }
   }

   


   


   public function register_Edit_view($id)
   {
      $user = User::findOrFail($id);
      // return $user;
      return view('pages.register_edit', ['user' => $user]);
   }

   // public function register_update()
   // {
   //    return view('pages.register');
   // }

   public function register_update(Request $request, $id)
   {
      // return 1;

      $user = User::findOrFail($id);
      $user->id = $request->id;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;

      $user->save();
      //  return $user;
      return redirect('/table_view')->withSuccess('You have Successfully Updated');
   }

   public function calendar_view()
   {
      return view('pages.calendar');
   }

   public function gallery_view()
   {

      $product = Product::all();
      // print_r($product->product_image);
      // die("sss"); 
      return view('pages.gallery', ['product' =>  $product]);
   }

   public function projects_view(Request $request)
   {
      // $product = Product::all();
      $product = Product::paginate(3);
 
      if ($request->ajax()) {
          $view = view('data', compact('product'))->render();

          return response()->json(['html' => $view]);
      }
      return view('pages.projects', compact('product'));
      // return view('pages.projects', ['product' => $product]);
      
   }

   public function projects_add_view()
   {
      return view('pages.project-add');
   }

   public function project_detail_view(Request $request)
   {
      // return 1;
      $posts = Contact::paginate(30);

      // $users = User::paginate(10);        
      $data = '';
      if ($request->ajax()) {
         foreach ($posts as $user) {
            $data .= '<li>' . 'Name:' . ' <strong>' . $user->name . '</strong><br> Email: ' . $user->email . '</li>';
         }
         return $data;
      }
      // $users = User::paginate(10);        
      // $data = '';
      // if ($request->ajax()) {
      // 	foreach ($posts as $user) {
      // 	}
      // 	return $data;
      // }

      return view('pages.project-detail', compact('posts'));
      //   }
      return view('pages.project-detail');
   }

   public function contact_view()
   {
      return view('pages.contacts');
   }

   public function contact_us_view()
   {
      return view('pages.contact-us');
   }

   public function projects_edit_view($product_id)
   {
      $product = Product::findOrFail($product_id);
      return view('pages.project-edit', ['product' =>  $product]);
   }



   public function destroy($id)
   {
      $product = User::findOrFail($id)
         //  return $product;
         ->delete();
      //  return $product;
      return redirect()->back();
   }

   public function contact_us_store(Request $request)
   {
      // return 1;

      $contact = new contact();
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->message = $request->message;
      $contact->save();
      return redirect('/admin')->withSuccess('Contact saved Successfully');
   }

   public function logout(Request $request)
   {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('login')
         ->withSuccess('You have logged out successfully!');
   }


   public function post_ajax(Request $request)
   {
       $product = Product::paginate(3);
 
       if ($request->ajax()) {
           $view = view('data', compact('product'))->render();
 
           return response()->json(['html' => $view]);
       }
 
       return view('pages.projects', compact('product'));
   }
}
