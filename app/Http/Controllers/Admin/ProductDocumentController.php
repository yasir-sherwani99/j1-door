<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Product;
use App\Models\ProductDocument;
use App\Traits\BreadcrumbTrait;
use App\Http\Requests\ProductDocumentStoreRequest;

class ProductDocumentController extends Controller
{
    use BreadcrumbTrait;

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
    	if(!isset($product) || empty($product)) {
    		abort(404);
    	}

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Product Documents", "Products", "Documents");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.products.documents', compact('product'));
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

        // $filePath = public_path() . '/' . $doc->src;
        $filePath = $doc->src;
        $fileName = explode('/', $doc->src);

        return response()->download($filePath, $fileName[1], $headers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductDocumentStoreRequest $request)
    {
        $product = Product::find($request->product_id);
    	if(!isset($product) || empty($product)) {
    		abort(404);
    	}

        if(count($request->doc_files) > 0) {
            foreach($request->doc_files as $key => $doc) {
                $num = $key + 1;
                // doc extension
                $extension = $doc->getClientOriginalExtension();
                // create doc new name        
                $docName = 'document_' . time() . '_' . $num . '.' . $extension;
                $doc->move('documents', $docName);

                $prodDoc = new ProductDocument;

                $prodDoc->product_id = $request->product_id;
                $prodDoc->name = $request->doc_name[$key];
                $prodDoc->src = 'documents/' . $docName;
                $prodDoc->type = "application/{$extension}";

                $prodDoc->save();
            }
        }

        return redirect()->route('admin.document.show', $request->product_id)
                         ->with('success', 'Product documents uploaded successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($docId)
    {
        $doc = ProductDocument::find($docId);
        if(!isset($doc) || empty($doc)) {
            return response()->json([
                'success' => false,
                'message' => 'Woops! The requested resource was not found!'
            ], 404);    
        }

        if(isset($doc->src)) {
            if (File::exists($doc->src)) {
                // delete image from storage
                File::delete($doc->src);
            } 
        }

        $doc->delete();

        return response()->json([
            'success' => true,
            'message' => 'Well done! Product document deleted successfully.',
            'doc_id' => $docId
        ], 200);
    }
}

