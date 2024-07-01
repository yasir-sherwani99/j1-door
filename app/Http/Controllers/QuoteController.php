<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quote;
use App\Http\Requests\QuoteStoreRequest;
use App\Models\Testimonial;

class QuoteController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::active()->get();
        return view('guest.quote', compact('testimonials'));
    }

    public function store(QuoteStoreRequest $request)
    {
        $quote = new Quote;

        $quote->first_name = $request->first_name;
        $quote->last_name = $request->last_name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->zip = $request->zip;
        $quote->product_type = $request->product_type;
        $quote->service_type = $request->service_type;
        $quote->description = $request->description;
        $quote->is_view = 0;

        $quote->save();

        return redirect()->route('quote.index')
                         ->with('success', 'Your request has been submitted successfully.');
    }
}
