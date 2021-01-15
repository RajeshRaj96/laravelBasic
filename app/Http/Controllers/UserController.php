<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    
    public function uploadAvatar(Request $request){
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            // $request->session()->flash('message', "Image Uploaded Successfully.");
            return redirect()->back()->with('message', "Image Uploaded Successfully.");
        }
        return redirect()->back()->with('error', "Image Not Uploaded.");
    }


    public function index(){

        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', [ 
        //     'Rajesh',
        //     'rajesh@gmail.com',
        //     'rajesh123'
        //     ]);

        // $users = DB::select('select * from users');
        // echo "<pre>";
        // print_r($users);

        // DB::update('update users set name = "Rajesh Raj" where email = ?', ['rajesh@gmail.com']);
        // DB::delete('delete from users where id=?', [1]);

        
        // $user = new User();
        // $user->name = 'Rajesh';
        // $user->email = 'rajesh@gmail.com';
        // $user->password = bcrypt('rajesh123');
        // $user->save();
        // dd($user);

        // $data = [
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => 'test123'
        // ];

        // User::create($data);
        
        // $user = User::all();
        // return $user;

        // User::where('id', 2)->delete();

        // User::where('id', 3)->update(['name' => 'Rajesh Raj']);


        return view('home');
    }
}
