<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MetaTag;
use App\Traits\BreadcrumbTrait;
use App\Http\Requests\MetaTagUpdateRequest;

class MetaTagController extends Controller
{
    use BreadcrumbTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metatags = MetaTag::all();

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Meta Tags", "Meta Tags", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.metatags.index', compact('metatags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $metatag = MetaTag::find($id);
    	if(!isset($metatag) || empty($metatag)) {
    		abort(404);
    	}

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Edit Meta Tag", "Meta Tags", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.metatags.edit', compact('metatag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MetaTagUpdateRequest $request, string $id)
    {
        $metatag = MetaTag::find($id);
    	if(!isset($metatag) || empty($metatag)) {
    		abort(404);
    	}

        $metatag->title = $request->title;
        $metatag->description = $request->description;
        $metatag->keywords = $request->keywords;

        $metatag->save();
        
        return redirect()->route('metatags.index')
                         ->with('success', 'Meta Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
