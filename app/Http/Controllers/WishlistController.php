<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Wishlist;
use Maize\Markable\Models\Favorite;
use Illuminate\Http\Request;
use Auth;
use AppWishlist;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class WishlistController extends Controller
{

    public function index()
    {
        $data = Product::all();
        $product = Gallery::latest()->paginate(12);
      $user = FacadesAuth::user();
      $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
      return view('home.product_choco', compact('user', 'wishlists','data','product'));
    }


    public function store(Request $request)
    {
//Validating title and body field
      $this->validate($request, array(
          'user_id'=>'required',
          'product_id' =>'required',
        ));

      $wishlist = new Wishlist;

      $wishlist->user_id = $request->user_id;
      $wishlist->product_id = $request->product_id;
      $wishlist->status = 1;
// return $wishlist;

      $wishlist->save();

      return redirect()->back()->with('flash_message',
          'Item, '. $wishlist->product->title.' Added to your wishlist.');
}


public function destroy($id)
    {
      $wishlist = Wishlist::findOrFail($id);
      $wishlist->status = 0;
      $wishlist->delete();

      return redirect()->route('wishlist.index')
          ->with('flash_message',
           'Item successfully deleted');
    }








    // public function wishlist()
    // {
    //     $products = Product::whereHasFavorite(
    //         auth()->user()
    //     )->get(); 
    //     // dd($products);
    //     return view('Frontend.wishlist',compact('products'));
    // }

    // public function favoriteAdd($id)
    // {
    //     $product = Product::find($id);
    //     $user = Auth::user();
    //     Favorite::add($product, $user);
    //     session()->flash('success', 'Product is Added to Favorite Successfully !');

    //     return redirect()->route('wishlist');
    // }

    // public function favoriteRemove($id)
    // {
    //     $product = Product::find($id);
    //     // $user = auth()->user();
    //     $user = Auth::user();
    //     Favorite::remove($product, $user);
    //     session()->flash('success', 'Product is Remove to Favorite Successfully !');

    //     return redirect()->route('wishlist');
    // }
}