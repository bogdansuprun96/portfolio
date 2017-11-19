<?php

namespace App\Http\Controllers;

use App\Info;
use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
        $info = Info::getInfo();
        $results = News::getAllPosts();
        return view('frontend.index', ['results' => $results, 'info' => $info]);
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function order(Request $request)
    {
        $all = $request->all();
        return view('frontend.order', ['all' => $all]);
    }
}
