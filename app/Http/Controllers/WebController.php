<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::where('slug', $slug)->firstOrFail();

        $allowedTemplates = ['category_1', 'category_2', 'category_3', 'category_4', 'category_5'];
        $template = in_array($category->template, $allowedTemplates)
            ? $category->template
            : 'category_1';

        return view("templates." . $template, compact('category'));
    }
}
