<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quote;
use App\Traits\BreadcrumbTrait;

class QuoteController extends Controller
{
    use BreadcrumbTrait;

    public function index()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Quotes", "Quotes", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.quotes.index');
    }

    public function getQuotes()
    {
        $quotesArray = [];
        $quotes = Quote::sort('desc')->get();
        
        if(count($quotes) > 0) {
            foreach($quotes as $quote) {
                $quotesArray[] = [
                    'id' => $quote->id,
                    'name' => $quote->first_name . ' ' . $quote->last_name,
                    'product' => $quote->product_type,
                    'is_view' => $quote->is_view,
                    'date' => $quote->created_at,
                    'action' =>  $quote->id
                ];
            }
        }

        return json_encode($quotesArray);
    }

    public function show($id)
    {
        $quote = Quote::find($id);
        if(!isset($quote) || empty($quote)) {
    		abort(404);
    	}

        $quote->is_view = 1;
        $quote->update();

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Quote Details", "Quotes", "Details");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.quotes.show', compact('quote'));
    }
}
