<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if(!$user || !Hash::check($request->password, $user->password))
        {
            return "Username or Password is not matching";
        }
        else
        {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');
    }
    function profile()
    {
        $userId = session()->get('user')['id'];
        $orders = DB::table('orders') 
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
        return view('profile',['orders'=>$orders]);
    }
}
