<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Testimonial;

class BlogController extends Controller
{
    /**
     * Search a listing of the resource.
     */
    public function index(Request $request)
    {
        // get all active blogs
        $query = Blog::query();
    
        $selectedTag = "";
        if($request->has('tag')) {
            $selectedTag = $request->query('tag');
            $query->whereHas('tag', function($q) use ($selectedTag) {
                $q->where('tag_id', $selectedTag);
            });
        }

        $blogs = $query->active()->sort('desc')->paginate(6);
        // get all testimonial
        $testimonials = Testimonial::active()->get();
        // get all tags
        $tags = Tag::active()->get();

        return view('guest.blogs', compact('blogs', 'testimonials', 'tags', 'selectedTag'));
    }
}
