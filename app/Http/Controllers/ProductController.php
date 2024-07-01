<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductDocument;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexResidentialProducts()
    {
        $pageTitle = "Residential";
        $products = Product::residential()->active()->paginate(9);
    
        return view('guest.category', compact('pageTitle', 'products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexCommercialProducts()
    {
        $pageTitle = "Commercial";
        $products = Product::commercial()->active()->paginate(9);
    
        return view('guest.category', compact('pageTitle', 'products'));
    }

    /**
     * Display the specified resource.
     */
    public function getProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Product::where('id', '<>', $product->id)
                                  ->where('category_id', $product->category_id)
                                  ->inRandomOrder()
                                  ->take(10)
                                  ->get();

        return view('guest.product_details', compact('product', 'relatedProducts'));
    }

        /**
     * Download pdf file.
     */
    public function download($docId)
    {
        $doc = ProductDocument::find($docId);
        if(!isset($doc) || empty($doc)) {
    		abort(404);
    	}

        $headers = array(
            'Content-Type: application/pdf',
        );

        $filePath = public_path() . '/' . $doc->src;
        $fileName = explode('/', $doc->src);

        return response()->download($filePath, $fileName[1], $headers);
    }
}
