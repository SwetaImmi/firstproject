<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{

    public function banner_upload()
    {
        return view('pages.banner_upload');
    }

    public function banner_upload_store(Request $request)
    {


        if ($request->file != "") {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(('uploads1'), $fileName);
        } else {
            $fileName = " ";
        }

        if ($request->image != "") {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(('uploads1'), $image);
        } else {
            $image = "0";
        }
        $product = new Banner();

        // $product->Banner_id     =  $request->Banner_id;
        $product->banner_name     =  $request->Banner_name;
        $product->banner_img =  $image;
        $product->role =  Auth::user()->role;
        $product->email =  Auth::user()->email;


        $product->save();
        // return $product;
        return redirect('admin');
    }

    public function banner_list()
    {

        // return 1;
        $banner = Banner::all();
        return view('pages.banner_list', ['banner' => $banner]);
    }


    public function banner_delete($id)
    {
        // return 1;
        $banner = Banner::findOrFail($id)
            // ->latest()
            // ->skip(2)
            ->delete();
        //  return $product;
        return redirect()->back();
    }

    public function changeStatus(Request $request)
    {     
        $user = Banner::find($request->user_id);
        // $user->status =(isset($request['status']) == '1' ? '1' : '0');
          $user->status = $request->status;
        $keys = Banner::all();

        foreach ($keys as $key) {
            $rank = 0; //Example.. In real it's variable..
            DB::table('banners')
                ->where('id', $key->id)
                ->update(['status' => $rank]);
        }
        $user->save();

        // $adopted = (isset($_POST['status']) == '1' ? '1' : '0');


        return response()->json(['success' => 'Status change successfully.']);
    }

public function enquiry_show(){
    // return 1;
    return view('pages.enquiry');
}

public function enquiry_post(Request $request){
    $product = new Customer();
    $product->name     =  $request->name;
    $product->email =  $request->email;
    $product->message =  $request->message;
    $product->role =  Auth::check()? Auth::user()->role: 'Customer';
    // $product->email =  Auth::user()->email;
    $product->save();
    return $product;

    return 1;
}


}
