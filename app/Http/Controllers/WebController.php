<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('templates.home');
    }

    public function blog($slug) {
        return view("templates.blog_details_".$slug);
    }

    public function category($slug) {
        return view("templates.category_".$slug);
    }
}
