<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::getAllUser();
        return view('backend.html.index', ['users' => $users]);
    }

    public function profile()
    {
        return view('backend.html.profile');
    }

    public function updateUser(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = $request->all();
//        dd($data);

        if ($request->hasFile('avatar')) {
            $path_img = public_path() . "/profile_images/";
            $request->file('avatar')->move($path_img, $user_id . ".jpg");
            $image_path = $user_id;
        } else {
            $image_path = "https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg";
        }
        Portfolio::updateUser($user_id, $data, $image_path);
        return redirect()->back();
    }

}
