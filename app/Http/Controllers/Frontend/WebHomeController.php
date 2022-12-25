<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{

    public function registrationForm()
    {
        return view('frontend.pages.registration');
    }
    public function webHome()
    {
        $statistician = User::all();

        return view('frontend.pages.home', compact('statistician'));
    }

    public function registration(Request $request)
    {
//dd($request->all());
        $request->validate([
            'name' => 'required',
            'degree' => 'required',
            'campus' => 'required',
            'skills' => 'required',
            'password' => 'required|min:6',
            'mobile' => 'required',
//            'avatar' => 'required',
        ]);

        $fileName = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads', $fileName);
        }


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'role' => 'statistician',
            'highest_degree' => $request->degree,
            'campus' => $request->campus,
            'skills' => $request->skills,
            'link_to_bio' => $request->link_to_bio,
            'linkedin' => $request->linkedin,
            'address' => $request->address,
            'avatar' => $fileName,
        ]);

        return redirect()->back()->with('message', 'Registration Success.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->except('_token');
        if (auth()->attempt($credentials)) {
            notify()->success('Login success');
            return redirect()->back();
        }
        notify()->error('invalid password');
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function updateProfile(Request $request)
    {
        //validation

        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->user_name,
            'address' => $request->user_address,
            'mobile' => $request->user_mobile,
        ]);

        notify()->success('User profile updated.');
        return redirect()->back();
    }

    public function search(Request $request)
    {

        $searchResult = User::where('name', 'LIKE', '%' . $request->search_key . '%')
                                ->orWhere('skills', 'LIKE', '%' . $request->search_key . '%')
                                ->orWhere('campus', 'LIKE', '%' . $request->search_key . '%')
                                ->orWhere('highest_degree', 'LIKE', '%' . $request->search_key . '%')
                                ->get();

        return view('frontend.pages.search', compact('searchResult'));
    }

    public function categoryWiseProducts($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();
        return view('frontend.pages.category_wise_products', compact('products'));
    }

    public function productView($product_id)
    {
        $product = Product::find($product_id);
        return view('frontend.pages.product_view', compact('product'));

    }

    public function viewBuyForm($product_id)
    {
        $product = Product::find($product_id);
        return view('frontend.pages.buy_now', compact('product'));
    }

    public function orderCreate(Request $request, $product_id)
    {

        // create the order
        Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
            'receiver_name' => $request->first_name,
            'receiver_email' => $request->email,
        ]);
        notify()->success('Order placed Success.');
        return redirect()->route('home');

    }
}
