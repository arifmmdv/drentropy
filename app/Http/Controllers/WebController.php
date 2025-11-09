<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('templates.home');
    }

    public function blog($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $allowedTemplates = ['blog_details_1', 'blog_details_2', 'blog_details_3'];
        $template = in_array($blog->template, $allowedTemplates)
            ? $blog->template
            : 'blog_details_1';

        return view("templates." . $template, compact('blog'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = Blog::where(['category_id' => $category->id, 'is_visible' => true])->orderBy('created_at','DESC')->get();

        $allowedTemplates = ['category_1', 'category_2', 'category_3', 'category_4', 'category_5'];
        $template = in_array($category->template, $allowedTemplates)
            ? $category->template
            : 'category_1';

        return view("templates." . $template, compact('category', 'blogs'));
    }
}
