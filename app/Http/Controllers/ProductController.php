<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{

    public function projects_add_create(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'product_name' => 'required',
            'product_catogery' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

         ]);


         if($validator->passes())
         {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $new_name);
            // return $new_name;
    
            $product = new Product();
            $product->product_name =  $request->product_name;
            $product->product_catogery =  $request->product_catogery;
            $product->product_quantity =  $request->product_quantity;
            $product->product_price =  $request->product_price;
            $product->product_description =  $request->product_description;
            $product->product_image =  $new_name;
            $product->role =  Auth::user()->role;
            $product->email =  Auth::user()->email;
                 // return $product;
    
            $product->save();
          return response()->json([
           'message'   => 'Post Added Successfully',
           'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
           'class_name'  => 'alert-success'
          ]);
         }
         else
         {
          return response()->json([
            'error' => $validator->errors()->all(),
           'message'   => $validator->errors()->all(),
           'product_name' => '',
           'class_name'  => 'alert-danger'
          ]);

        
        //  if ($validator->fails()) {
        //     return response()->json([
        //        'error' => $validator->errors()->all()
        //     ]);
        //  } 
         }
   
         
   
        //  if ($validator->fails()) {
        //     return response()->json([
        //        'error' => $validator->errors()->all()
        //     ]);
        //  }   
        

        // if ($request->file != "") {
        //     $fileName = time() . '.' . $request->file->extension();
        //     $request->file->move(('uploads'), $fileName);
        // } else {
        //     $fileName = " ";
        // }
        // if ($request->image != "") {
        //     // return 1;
        //     $image = time() . '.' . $request->image->extension();
        //     $request->image->move(('uploads'), $image);
        // } else {
        //     // return 0;
        //     $image = "0";
        // }

    
        // return $product;
        // return response()->json(['success'=>'Registered successfully.']);

        // return redirect('projects');
    }



    public function productList(Request $request)
    {
        $products = Product::all();
        // $products = Product::latest()->paginate(4);
        // // User::where()->paginate(10)
        // if ($request->ajax()) {
        //     $product = view('Frontend.product', ['product' => $products]);
        //     // $view = view('posts.load', compact('posts', 'categories'))->render();
        //     return response()->json(['product' => $product]);
        // }
        // // return 1;
        return view('Frontend.product_wish', ['products' => $products]);
    }


    public function product_update(Request $request, $id)
    {


        if ($request->file != "") {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(('uploads'), $fileName);
        } else {
            $fileName = " ";
        }

        if ($request->image != "") {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(('uploads'), $image);
        } else {
            $image = "0";
        }
        // print_r($image); die('text');   
        $product = Product::find($id);
        // $product = Product::select('products')
        // ->join('gallery', 'products.product_catogery', '=', 'gallery.gallery_id')
        // // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->select('products.*', 'gallery.gallery_id')
        // ->get();

        //  new Product();      


        $product->product_name =  $request->product_name;
        $product->product_catogery =  $product->product_catogery;
        $product->product_quantity =  $request->product_quantity;
        $product->product_price =  $request->product_price * $request->product_quantity;
        $product->product_description =  $request->product_description;
        $product->product_image =   $product->product_image;
        // if ($request->product_catogery == '1') {
        //     $product->juice =  $request->product_catogery;
        // } elseif ($request->product_catogery == '2') {
        //     $product->cookie =  $request->product_catogery;
        // } elseif ($request->product_catogery == '3') {
        //     $product->Chocolate =  $request->product_catogery;
        // } else {
        //     $product->cake =  $request->product_catogery;
        // }
        $product->role =  Auth::user()->role;
        $product->email =  Auth::user()->email;
        $product->save();
        // echo "<pre>";
        // // print_r( $product->product_image );
        // print_r($product);
        // die();
        $gallery = new Gallery();
        $product = Product::find($id);
        $gallery->gallery_id = $product->product_catogery;
        if ($image != "0") {
            $gallery->gallery_images =   $image;
        } else {
            $gallery->gallery_images =   $product->product_image;
        }
        // $gallery->gallery_images = $product->product_image;
        // echo "<pre>";
        // print_r( $product->product_image );
        // print_r($gallery);
        // die();
        $gallery->save();
        // echo "<pre>";
        // // print_r( $product->product_image );
        // print_r($product);
        // die();

        // return $product;
        return redirect('projects');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id)->delete();
        return redirect()->back();
    }




    public function about_show(){
        return view('pages.about');
    }

    public function about_upload(Request $request)
    {
        

        if ($request->file != "") {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(('uploads2'), $fileName);
        } else {
            $fileName = " ";
        }

        if ($request->image != "") {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(('uploads2'), $image);
        } else {
            $image = "0";
        }
        $product = new About();

        $product->about_name		 =  $request->About_name;    
        $product->about_description	 =  $request->About_description	;    
        $product->about_img =  $image;
        $product->role =  Auth::user()->role;
        $product->email =  Auth::user()->email;

// return $product;
        $product->save();
        // return $product;
        return redirect('admin');
    }


}
