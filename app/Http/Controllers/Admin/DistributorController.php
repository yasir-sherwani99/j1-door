<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistributorStoreRequest;
use Illuminate\Http\Request;

use App\Models\Distributor;
use App\Traits\BreadcrumbTrait;

class DistributorController extends Controller
{
    use BreadcrumbTrait; 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Distributors", "Distributors", "List");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.distributors.index');
    }

    public function getDistributors()
    {
        $distsArray = [];
        $distributors = Distributor::sort('desc')->get();
        
        if(count($distributors) > 0) {
            foreach($distributors as $distributor) {
                $distsArray[] = [
                    'id' => $distributor->id,
                    'name' => $distributor->name,
                    'category' => ucfirst($distributor->category),
                    'phone' => $distributor->phone,
                    'status' => $distributor->is_active,
                //    'date' => $distributor->created_at,
                    'action' =>  $distributor->id
                ];
            }
        }

        return json_encode($distsArray);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Distributor Create", "Distributors", "Create");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.distributors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistributorStoreRequest $request)
    {
        $distributor = new Distributor;

        $distributor->name = $request->name;
        $distributor->category = $request->category;
        $distributor->email = $request->email;
        $distributor->phone = $request->phone;
        $distributor->website = $request->website;
        $distributor->address = $request->address;
        $distributor->latitude = $request->latitude;
        $distributor->longitude = $request->longitude;
        $distributor->description = $request->description;
        $distributor->is_active = isset($request->active) && $request->active == "on" ? 1 : 0;

        $distributor->save();

        return redirect()->route('distributors.index')
                         ->with('success', 'New distributor created successfully');
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
        $distributor = Distributor::find($id);
    	if(!isset($distributor) || empty($distributor)) {
    		abort(404);
    	}

        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Edit Distributor", "Distributors", "Edit");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.distributors.edit', compact('distributor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $distributor = Distributor::find($id);
        if(!isset($distributor) || empty($distributor)) {
    		abort(404);
    	}

        $distributor->name = $request->name;
        $distributor->category = $request->category;
        $distributor->email = $request->email;
        $distributor->phone = $request->phone;
        $distributor->website = $request->website;
        $distributor->address = $request->address;
        $distributor->latitude = $request->latitude;
        $distributor->longitude = $request->longitude;
        $distributor->description = $request->description;
        $distributor->is_active = isset($request->active) && $request->active == "on" ? 1 : 0;

        $distributor->update();

        return redirect()->route('distributors.index')
                         ->with('success', 'Distributor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
