<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::active()->get();        
        return view('guest.index', compact('testimonials'));
    }

    public function indexDistributor()
    {
        $testimonials = Testimonial::active()->get();        
        return view('guest.distributor', compact('testimonials'));
    }

    public function indexRepair()
    {
        return view('guest.repair');
    }

    public function indexBlogs()
    {
        return view('guest.blogs');
    }

    public function indexPrivacy()
    {
        return view('guest.privacy');
    }
}
