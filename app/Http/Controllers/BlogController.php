<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index() {
        // TODO -- Limit to 6 blog posts
        $featuredBlogs = WinkPost::live()->orderBy('publish_date', 'DESC')->limit(6)->get();
        $metaTitle = config('metadata.title.home');
        $metaDescription = config('metadata.description.home');

        return view('welcome')->with([
            'featuredBlogs' => $featuredBlogs,
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription
        ]);
    }

    public function list(Request $request) {
        if($request->has('filter')) {
            if($request->filter == 'cats') {
                $blogs = WinkPost::with('tags')
                    ->live()
                    ->whereHas('tags', function($query) {
                        $query->where('name', 'Mačke')
                            ->orWhere('name', 'macke')
                            ->orWhere('name', 'mačke');
                    })
                    ->orderBy('publish_date', 'DESC')
                    ->simplePaginate(9);
            } elseif ($request->filter == 'dogs') {
                $blogs = WinkPost::with('tags')
                    ->live()
                    ->whereHas('tags', function($query) {
                        $query->where('name', 'Psi')
                            ->orWhere('name', 'psi');
                    })
                    ->orderBy('publish_date', 'DESC')
                    ->simplePaginate(9);
            } else {
                $blogs = WinkPost::with('tags')
                    ->live()
                    ->orderBy('publish_date', 'DESC')
                    ->simplePaginate(9);
            }
        } else {
            $blogs = WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->simplePaginate(9);
        }

        $metaTitle = config('metadata.title.blog');
        $metaDescription = config('metadata.description.blog');

        return view('blog')->with([
            'blogs' => $blogs,
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription

        ]);
    }


    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        if(count($post->tags)) {
            $relatedPosts = WinkPost::live()->whereHas('tags', function ($q) use ($post) {
                $q->whereIn('name', $post->tags->pluck('name'));
            })->where('slug', '!=', $slug)->limit(3)->get();
        } else {
            $relatedPosts = WinkPost::live()->where('slug', '!=', $slug)->limit(3)->get();
        }
        $metaTitle = $post->title;
        $metaDescription = $post->meta['meta_description'];

        return view('single', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription
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

        $metaTitle = config('metadata.title.blog');
        $metaDescription = config('metadata.description.blog');

        return view('blog')->with([
            'blogs' => $blogs,
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription
        ]);
    }


    public function sendEmail(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required',
        ]);

        Mail::to(env('ADMIN_MAIL'))->send(new ContactFormMail($data));
    }

    public function sitemap() {
        $blogs = WinkPost::live()->get();

        $metaTitle = config('metadata.title.home');
        $metaDescription = config('metadata.description.home');

        return response()->view('sitemap', [
            'blogs' => $blogs,
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription

        ])->header('Content-Type', 'text/xml');
    }
}
