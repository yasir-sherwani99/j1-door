<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;

use App\Models\Testimonial;
use App\Models\Distributor;

class DistributorController extends Controller
{
    /**
     * Show a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::active()->get();        
        return view('guest.distributor', compact('testimonials'));
    }

    /**
     * Search a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = Distributor::query();
        if(isset($request->address)) {
            $query = $query->where('address', 'LIKE', "%{$request->address}%");
        }

        $distributors = $query->active()->get();
        $testimonials = Testimonial::active()->get();

        return view('guest.distributor', compact('distributors', 'testimonials'));
    }
}
