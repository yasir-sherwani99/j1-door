<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\ProductSpecification;

class ProductSpecificationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if(!isset($product) || empty($product)) {
    		abort(404);
    	}

        $product->is_specification = 1;

        $product->update();

        for($i = 0; $i < count($request->spec_name); $i++) 
        {
            $spec = new ProductSpecification;

            $spec->product_id = $request->product_id;
            $spec->spec_name = $request->spec_name[$i];
            $spec->spec_details = $request->spec_details[$i];

            $spec->save();
        }

        return redirect()->route('products.edit', $request->product_id)
                        ->with('success', 'Product specification added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($specId)
    {
        $spec = ProductSpecification::find($specId);
        if(!isset($spec) || empty($spec)) {
            return response()->json([
                'success' => false,
                'message' => 'Woops! The requested resource was not found!'
            ], 404);    
        }

        $spec->delete();

        return response()->json([
            'success' => true,
            'message' => 'Well done! Product specification deleted successfully.',
            'spec_id' => $specId
        ], 200);
    }
}
