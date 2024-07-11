<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Image;

use App\Models\Blog;
use App\Models\BlogImage;
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
        $blogs = Blog::sort('desc')->paginate(10);
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
        $blog = new Blog;

        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->content = $request->content;
        $blog->is_active = $request->active == 'on' ? 1 : 0;

        $blog->save();
        // get last inserted id
        $blogId = $blog->id;

        $blog->tag()->sync($request->tags);

        if(isset($request->images) && count($request->images) > 0) {
            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/blogs';
                // create image new name        
                $imageName = 'blogs_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/blogs/' . $imageName;

                $blogImage = new BlogImage;

                $blogImage->blog_id = $blogId;
                $blogImage->name = $imageName;
                $blogImage->src = $imageUrl;
                $blogImage->width = 0;
                $blogImage->height = 0;
                $blogImage->size = 0;
                $blogImage->type = "image/{$extension}";

                $blogImage->save();
            }
        }

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
        $selectedTags = [];
        $blogImagesArr = [];
        $blog = Blog::find($id);
    	if(!isset($blog) || empty($blog)) {
    		abort(404);
    	}

        if(count($blog->tag) > 0) {
            foreach($blog->tag as $tag) {
               $selectedTags[] = (string) $tag->id;
            }
        }

        $selectedTags = json_encode($selectedTags);

        // tags
        $tags = Tag::active()->get();

        if(count($blog->images) > 0) {
            foreach($blog->images as $image) {
                $blogImagesArr[] = [
                    'id' => $image->id,
                    'src' => config('app.url') . '/' . $image->src
                ];
            }
        }
    
        // blog images
        $blogImages = json_encode($blogImagesArr);

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Edit Blog", "Blogs", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.blogs.edit', compact('blog', 'selectedTags', 'tags', 'blogImages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogStoreRequest $request, string $id)
    {
        $blog = Blog::find($id);
    	if(!isset($blog) || empty($blog)) {
    		abort(404);
    	}

        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->content = $request->content;
        $blog->is_active = $request->active == 'on' ? 1 : 0;

        $blog->update();

        $blog->tag()->sync($request->tags);

        if(isset($request->images) && count($request->images) > 0) {
            foreach($request->images as $key => $image) {
                $num = $key + 1;
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/blogs';
                // create image new name        
                $imageName = 'blogs_' . time() . '_' . $num . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/blogs/' . $imageName;

                $blogImage = new BlogImage;

                $blogImage->blog_id = $blog->id;
                $blogImage->name = $imageName;
                $blogImage->src = $imageUrl;
                $blogImage->width = 0;
                $blogImage->height = 0;
                $blogImage->size = 0;
                $blogImage->type = "image/{$extension}";

                $blogImage->save();
            }
        }

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if(!isset($blog) || empty($blog)) {
    		abort(404);
    	}

        $blog->tag()->sync([]);

        $images = BlogImage::where('blog_id', $id)->get();
        if(isset($images) && count($images) > 0) {
            foreach($images as $img) {
                $image = BlogImage::find($img->id);
                if (File::exists($image->src)) {
                    // delete image from storage
                    File::delete($image->src);
                    // delete image from db
                    $image->delete();               
                } 
            }
        }

        $blog->delete();               

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog deleted successfully');
    }
}
