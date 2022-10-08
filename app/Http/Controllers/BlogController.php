<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index() {
        // TODO -- Limit to 6 blog posts
        $featuredBlogs = WinkPost::live()->limit(6)->get();

        return view('welcome')->with([
            'featuredBlogs' => $featuredBlogs,
        ]);
    }

    public function list() {
        $blogs = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(9);

        return view('blog')->with([
            'blogs' => $blogs,
        ]);
    }

    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('single', [
            'post' => $post
        ]);
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('query');

        $blogs = WinkPost::with('tags')
            ->live()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(9);

        // Return the search view with the resluts compacted
        return view('blog', compact('blogs'));
    }
}
