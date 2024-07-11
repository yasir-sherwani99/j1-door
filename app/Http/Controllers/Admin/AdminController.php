<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Image;
use App\Models\Admin;
use App\Traits\BreadcrumbTrait;

class AdminController extends Controller
{
    use BreadcrumbTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Admins", "Admins", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Admin Create", "Admins", "Create");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = new Admin;

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->phone = $request->phone;
        $admin->address = $request->address;

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            if($image instanceof UploadedFile) {
                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/avatars';
                // create image new name        
                $imageName = 'avatar_' . time() . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/avatars/' . $imageName;

                $admin->photo = $imageUrl;
            } 
        }

        $admin->status = $request->active == 'on' ? 'active' : 'blocked';;
        $admin->save();

        return redirect()->route('admins.index')
                         ->with('success', 'New Admin created successfully');
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
        $admin = Admin::find($id);
    	if(!isset($admin) || empty($admin)) {
    		abort(404);
    	}

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Admin Edit", "Admins", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::find($id);
    	if(!isset($admin) || empty($admin)) {
    		abort(404);
    	}

        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->address = $request->address;

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            if($image instanceof UploadedFile) {
                // delete previous image from folder
                if (File::exists($admin->photo)) {
                    // delete image from storage
                    File::delete($admin->photo);
                }

                // image extension
                $extension = $image->getClientOriginalExtension();
                // destination path
                $destinationPath = 'images/upload/avatars';
                // create image new name        
                $imageName = 'avatar_' . time() . '.' . $extension;
                // create image instanc and save
                $imageFile = Image::make($image->getRealPath());
                $imageFile->save($destinationPath . '/' . $imageName);
                // get image url
                $imageUrl = 'images/upload/avatars/' . $imageName;

                $admin->photo = $imageUrl;
            } 
        }

        $admin->save();

        return redirect()->route('admins.edit', $admin->id)
                         ->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::find($id);
        if(!isset($admin) || empty($admin)) {
    		abort(404);
    	}

        // delete image from folder if exist
        if(isset($admin->photo)) {
            if (File::exists($admin->photo)) {
                // delete image from storage
                File::delete($admin->photo);
            }
        }

        $admin->delete();               

        return redirect()->route('admins.index')
                         ->with('success', 'Admin deleted successfully');
    }
}
