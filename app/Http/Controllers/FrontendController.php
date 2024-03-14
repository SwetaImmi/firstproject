<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Contact;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::latest()->paginate(8);
        $prdt = Product::all()->count();
        $images = Gallery::latest()->orderBy('id', 'desc')->groupBy('gallery_id')->get();
        $banner = Banner::latest()->paginate(4);
        $gallery = Gallery::latest()->paginate(15);

        return view('home.index', ['product' => $product, 'gallery' => $gallery, 'images' => $images, 'prdt' => $prdt, 'banner' => $banner]);
    }

    public function about_view()
    {
        $about = About::latest()->paginate(1);
        $banner = Banner::latest()->paginate(1);
        return view('home.about', ["about" => $about, 'banner' => $banner]);
    }

    public function contact_view()
    {
        return view('home.contact');
    }


    public function contact_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return response()->json(['success' => ' successfully posted.']);
    }

    public function design_view(Request $request)
    {

        $products = Product::all();

        return view('home.products', ['product' => $products]);
    }

    public function design_edit()
    {
        return view('Frontend.e_commerce');
    }

    public function shop_view()
    {
        return view('Frontend.shop');
    }


    public function e_commerce_view($product_id)
    {
        // return 1;
        $product = Product::findOrFail($product_id);
        $image = Product::latest()->paginate(3);
        return view('home.product_details', ['product' =>  $product, 'image' =>  $image]);
    }

    public function design_cofe()
    {
        $product = Product::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('Frontend.design_jc', ['product' => $product]);
    }
    public function design_jc()
    {
        // return view('home.single-product');
        $product = Product::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('home.single-product', ['product' => $product]);
    }

    public function search(Request $request)
    {

        // $products = Product::all();
        // $product = Product::all();
        $search = $request['search'] ?? "";

        if ($search != "") {
            // return 1;

            $product = Product::where('product_name', 'like', '%' . $search . '%')
                ->orWhere('product_catogery', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
                ->orderby('id', 'desc')
                ->paginate(10);
            $product->append(array('search ' =>  $search));
        } else {
            $product = Product::all();
        }

        return view('home.products', compact('product'));
    }

    public function product_cake()
    {
        $data = Product::all();
        $product = Gallery::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('home.product_cake', ['product' => $product, 'data' => $data]);
    }
    public function product_choco()
    {
        // return 1;
        $data = Product::all();
        $product = Gallery::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('home.product_choco', ['product' => $product, 'data' => $data]);
    }

    public function product_cookie()
    {
        // return 1;
        $data = Product::all();
        $product = Gallery::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('home.product_cookie', ['product' => $product, 'data' => $data]);
    }

    public function product_donut()
    {
        // return 1;
        $data = Product::all();
        $product = Gallery::latest()->paginate(12);
        // User::where()->paginate(10)
        return view('home.product_donut', ['product' => $product, 'data' => $data]);
    }
 

}
