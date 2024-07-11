<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Image;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Traits\BreadcrumbTrait;

class TestimonialController extends Controller
{
    use BreadcrumbTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all testimonials
        $testimonials = Testimonial::all();
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Testimonials", "Testimonials", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Testimonial Create", "Testimonials", "Create");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialStoreRequest $request)
    {
        $isActive = $request->active == 'on' ? 1 : 0;

        $testimonial = new Testimonial;

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->is_active = $isActive;

        if(count($request->images) > 0) {
            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/testimonials';
                // create image new name        
                $imageName = 'testimonials_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath())->resize(45, 45, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/testimonials/' . $imageName;
                
                $testimonial->picture = $imageUrl;
            }
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')
                         ->with('success', 'New testimonial created successfully.');
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
        $testiImagesArr = [];
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Edit Testimonial", "Testimonials", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        $testimonial = Testimonial::find($id);
    	if(!isset($testimonial) || empty($testimonial)) {
    		abort(404);
    	}

        if(isset($testimonial->picture)) {
            $testiImagesArr[] = [
                'id' => $testimonial->id,
                'src' => config('app.url') . '/' . $testimonial->picture
            ];
        }

        // testimonial images
        $testimonialImages = json_encode($testiImagesArr);

        return view('admin.testimonials.edit', compact('testimonial', 'testimonialImages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialUpdateRequest $request, string $id)
    {
        $testimonial = Testimonial::find($id);
    	if(!isset($testimonial) || empty($testimonial)) {
    		abort(404);
    	}

        $isActive = $request->active == 'on' ? 1 : 0;

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->comment = $request->comment;
        $testimonial->is_active = $isActive;

        if(isset($request->images) && count($request->images) > 0) {

            // delete old image
            if (File::exists($testimonial->picture)) {
                // delete image from storage
                File::delete($testimonial->picture);             
            }

            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/testimonials';
                // create image new name        
                $imageName = 'testimonials_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath())->resize(45, 45, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/testimonials/' . $imageName;
                
                $testimonial->picture = $imageUrl;
            }
        }

        $testimonial->update();

        return redirect()->route('testimonials.index')
                         ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);
        if(!isset($testimonial) || empty($testimonial)) {
            abort(404);
        }

        if(isset($testimonial->picture)) {
            if (File::exists($testimonial->picture)) {
                // delete image from storage
                File::delete($testimonial->picture);
            }
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')
                         ->with('success', 'Testimonial deleted successfully.');
    }
}
