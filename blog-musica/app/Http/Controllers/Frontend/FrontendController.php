<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {

        $category = Category::all();
        return view('frontend.index', compact('category'));
    }

    public function viewTracks()
    {
        $category = Category::all();
        return view('frontend.tracks', compact('category'));
    }

}
