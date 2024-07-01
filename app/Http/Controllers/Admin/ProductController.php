<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Image;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductDocument;
use App\Models\ProductSpecification;
use App\Traits\BreadcrumbTrait;

class ProductController extends Controller
{
    use BreadcrumbTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::sort('desc')->paginate(10);
    
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Products", "Products", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Product Create", "Products", "Create");
        view()->share('breadcrumbs', $breadcrumbs);

        $categories = Category::active()->get();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'sub_title' => 'nullable|string|max:191',
            'category_id' => 'required',
            'description' => 'required|string|min:10',
            'is_spec' => 'nullable',
            'spec_name' => isset($request->is_spec) ? 'required_if:is_spec,on|array' : 'nullable',
            'spec_details' => isset($request->is_spec) ? 'required_if:is_spec,on|array' : 'nullable',
            'is_feature' => 'nullable',
            'features' => isset($request->is_feature) ? 'required_if:is_feature,on|string' : 'nullable',
            'is_support' => 'nullable',
            'support' => isset($request->is_support) ? 'required_if:is_support,on|string' : 'nullable',
            'warranty' => 'nullable|string',
            'images' => 'required|array|min:1',
        ]);

        $product = new Product;

        $product->title = $request->title;
        $product->sub_title = $request->sub_title;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->is_specification = isset($request->is_spec) && $request->is_spec == "on" ? 1 : 0;
        $product->is_feature = isset($request->is_feature) && $request->is_feature == "on" ? 1 : 0;
        $product->features = $request->features;
        $product->is_support = isset($request->is_support) && $request->is_support == "on" ? 1 : 0;
        $product->support = $request->support;
        $product->warranty = $request->warranty;
        $product->is_active = isset($request->active) && $request->active == "on" ? 1 : 0;

        $product->save();
        // get last inserted id
        $productId = $product->id;

        if(isset($request->is_spec) && $request->is_spec == "on") {
            for($i = 0; $i < count($request->spec_name); $i++) {
                if(isset($request->spec_name[$i]) && isset($request->spec_details[$i])) {
                    $prodSpec = new ProductSpecification;

                    $prodSpec->product_id = $productId;
                    $prodSpec->spec_name = $request->spec_name[$i];
                    $prodSpec->spec_details = $request->spec_details[$i];

                    $prodSpec->save();
                }
            }
        }

        if(isset($request->images) && count($request->images) > 0) {
            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = public_path('images/upload/products');
                // create image new name        
                $imageName = 'products_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/products/' . $imageName;

                $prodImage = new ProductImage;

                $prodImage->product_id = $productId;
                $prodImage->name = $imageName;
                $prodImage->src = $imageUrl;
                $prodImage->width = 0;
                $prodImage->height = 0;
                $prodImage->size = 0;
                $prodImage->type = "image/{$extension}";

                $prodImage->save();
            }
        }

        return redirect()->route('products.index')
                         ->with('success', 'New product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodImagesArr = [];
        $product = Product::find($id);
    	if(!isset($product) || empty($product)) {
    		abort(404);
    	}

        if(count($product->images) > 0) {
            foreach($product->images as $image) {
                $prodImagesArr[] = [
                    'id' => $image->id,
                    'src' => config('app.url') . '/' . $image->src
                ];
            }
        }
    
        // product images
        $prodImages = json_encode($prodImagesArr);
        // all categories
        $categories = Category::active()->get();
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Edit Product", "Products", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.products.edit', compact('product', 'prodImages', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //    dd($request->all());
        $request->validate([
            'title' => 'required|string|max:191',
            'sub_title' => 'nullable|string|max:191',
            'category_id' => 'required',
            'description' => 'required|string|min:10',
            'is_spec' => 'nullable',
            'spec_name' => isset($request->is_spec) ? 'required_if:is_spec,on|array' : 'nullable',
            'spec_details' => isset($request->is_spec) ? 'required_if:is_spec,on|array' : 'nullable',
            'is_feature' => 'nullable',
            'features' => isset($request->is_feature) ? 'required_if:is_feature,on|string' : 'nullable',
            'is_support' => 'nullable',
            'support' => isset($request->is_support) ? 'required_if:is_support,on|string' : 'nullable',
            'warranty' => 'nullable|string',
            'images' => 'nullable|array',
        ]);

        $product = Product::find($id);
        if(!isset($product) || empty($product)) {
    		abort(404);
    	}

        $product->title = $request->title;
        $product->sub_title = $request->sub_title;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->is_specification = isset($request->is_spec) && $request->is_spec == "on" ? 1 : 0;
        $product->is_feature = isset($request->is_feature) && $request->is_feature == "on" ? 1 : 0;
        $product->features = isset($request->is_feature) && $request->is_feature == "on" ? $request->features : null;
        $product->is_support = isset($request->is_support) && $request->is_support == "on" ? 1 : 0;
        $product->support = isset($request->is_support) && $request->is_support == "on" ? $request->support : null;
        $product->warranty = $request->warranty;
        $product->is_active = isset($request->active) && $request->active == "on" ? 1 : 0;

        $product->update();

        if(isset($request->is_spec) && $request->is_spec == "on") {
            for($i = 0; $i < count($request->spec_name); $i++) {
                if(isset($request->spec_id[$i])) {
                    $prodSpec = ProductSpecification::findOrFail($request->spec_id[$i]);

                    $prodSpec->spec_name = $request->spec_name[$i];
                    $prodSpec->spec_details = $request->spec_details[$i];

                    $prodSpec->update();
                }
            }
        } else {
            ProductSpecification::where('product_id', $product->id)->delete();
        }

        if(isset($request->images) && count($request->images) > 0) {
            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = public_path('images/upload/products');
                // create image new name        
                $imageName = 'products_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/products/' . $imageName;

                $prodImage = new ProductImage;

                $prodImage->product_id = $product->id;
                $prodImage->name = $imageName;
                $prodImage->src = $imageUrl;
                $prodImage->width = 0;
                $prodImage->height = 0;
                $prodImage->size = 0;
                $prodImage->type = "image/{$extension}";

                $prodImage->save();
            }
        }

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(!isset($product) || empty($product)) {
            abort(404);
        }

        $images = ProductImage::where('product_id', $id)->get();
        if(isset($images) && count($images) > 0) {
            foreach($images as $img) {
                $image = ProductImage::find($img->id);
                if (File::exists(public_path($image->src))) {
                    // delete image from storage
                    File::delete($image->src);
                    // delete image from db
                    $image->delete();               
                } 
            }
        }

        $specifications = ProductSpecification::where('product_id', $id)->get();
        if(isset($specifications)) {
            $specifications->delete();
        }

        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully');
    }
}
