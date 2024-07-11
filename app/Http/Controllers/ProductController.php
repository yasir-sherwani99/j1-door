<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductDocument;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Search a listing of the resource.
     */
    public function searchProducts($productType, Request $request)
    {
        $query = Product::query();
        
        if($productType == 'commerical') {
            $query->commercial();
        }

        if($productType == 'residential') {
            $query->residential();
        }

        $cats = [];
        if($request->has('cat')) {
            $cat = $request->query('cat');
            $tempArr = explode(',', $cat);
            if(count($tempArr) > 0) {
                foreach($tempArr as $temp) {
                    if(isset($temp) && $temp != "") {
                        $cats[] = $temp;
                    }
                }
            }

            $query->whereIn('category_id', $cats);
        }

        $products = $query->active()->paginate(9);

        $commericalFilters = Category::whereIn('id', [5,6,7,8])->get();
        $residentialFilters = Category::whereIn('id', [1,2,3,4])->get();

        return view('guest.category', compact('products', 'commericalFilters', 'residentialFilters', 'cats'));
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
