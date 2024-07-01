<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Traits\BreadcrumbTrait;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Tag;

class BlogController extends Controller
{
    use BreadcrumbTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all testimonials
        $blogs = Blog::all();
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Blogs", "Blogs", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::active()->get();

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Blog Create", "Blogs", "Create");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.blogs.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        //dd($request->all());
        $blog = new Blog;

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->is_active = $request->active == 'on' ? 1 : 0;

        $blog->save();

        $blog->tag()->sync($request->tags);

        return redirect()->route('blogs.index')
                         ->with('success', 'New blog created successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
