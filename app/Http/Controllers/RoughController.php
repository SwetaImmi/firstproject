<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\User;
use Exception;
use Hash;
use Illuminate\Support\Str;

class RoughController extends Controller
{
    
    public function rough_view(){
        return view('rough');
    }

    function action(Request $request)
    {
     $validation = Validator::make($request->all(), [
      'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     if($validation->passes())
     {
      $image = $request->file('select_file');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }




    function index1()
    {
     return view('rough');
    }

    function load_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('products')
          ->where('id', '<', $request->id)
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
      }
      else
      {
       $data = DB::table('products')
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
      }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {
        $output .= '
        <div class="row">
         <div class="col-md-12">
         <div col-md-3> '.$row->product_catogery.'</div>
         <div col-md-3>'.$row->product_name.'</div>
         <div col-md-3></div>
         <div col-md-3></div>
         <div col-md-3></div>
          <h3 class="text-info"><b></b></h3>
         
          <div class="col-md-6">
           <p><b>Publish Date - '.$row->product_quantity.'</b></p>
          </div>
          <div class="col-md-6" align="right">
           <p><b><i>By - '.$row->product_image.'</i></b></p>
           <p><b><i>By - '.asset('uploads/'.$row->product_image).'</i></b></p>
           <img class="table-avatar" src = '.asset('uploads/'.$row->product_image).' style="height: 50px;width:100px;">
          </div>
          <br />
          <hr />
         </div>         
        </div>
        ';
        $last_id = $row->id;
       }
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
       </div>
       ';
      }
      else
      {
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
      }
      echo $output;
     }
    }


    function loader()
    {
     return view('rough');
    }

    function load_data_xxx(Request $request)
    {
     if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('products')
          ->where('id', '<', $request->id)
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
      }
      else
      {
       $data = DB::table('products')
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
      }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {
        $output .= '
        <div class="row">
          <tbody>
          <td class="text-info"><b>'.$row->product_name.'</b></td>
          <td>'.$row->product_catogery.'</td>
    
         
           <td><b>Publish Date - '.$row->product_quantity.'</b></td>
  
         
           <td><b><i>By - '.$row->product_image.'</i></b></td>
           <img class="table-avatar" src = '.asset('uploads/'.$row->product_image).' style="height: 50px;width:100px;">
         
          <br />
          <hr />
          </tbody>      
        </div>
        ';
        $last_id = $row->id;
       }
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
       </div>
       ';
      }
      else
      {
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
      }
      echo $output;
     }
    }




    public function index(Request $request)
    {
        $product = Product::paginate(3);
  
        if ($request->ajax()) {
            $view = view('data', compact('product'))->render();
  
            return response()->json(['html' => $view]);
        }
  
        return view('pages.projects', compact('product'));
    }

    public function loadMore(Request $request)
	{
		$product = Product::paginate(3);        
		$data = '';
		if ($request->ajax()) {
			foreach ($product as $user) {
				$data.='<li>'.'Name:'.' <strong>'.$user->name.'</strong><br> Email: '.$user->email.'</li>';
			}
			return $data;
		}

		return view('loaderTest',compact('product'));
	}

    public function showForgetPasswordForm()
      {
        // return 1;
         return view('mail.forgotpassword');
      }


      public function submitStore(Request $request)
      {
        // return 1;
        $request->validate([
            'email' => 'required',
        ]);

        $token = 12344;       
    //   $test =  DB::table('password_reset_tokens')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);

    try{
        $mail = Mail::send('mail.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        echo '<pre>'; print_r($mail); die('herer');
        return $mail;
    }
    catch(Exception $e){
       
    }
       

 

// echo "<pre>";
//         print_r($mail); die();
// return response()->back();
// if($mail == true){
//     return 1;
// }else{
//     return 2;
// }

        return back()->with('message', 'We have e-mailed your password reset link!');
      }


//     public function subscribe(Request $request){
//         // return 1;

//         $customer = new Customer();
//         $customer->name = $request->name;
//         $customer->email = $request->email;

//         Mail::send('mail')->to('sweta.k@whizkraft.net',['customer' => $customer]);
// return $customer;

//     }
}
