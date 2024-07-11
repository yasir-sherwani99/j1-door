<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;
use App\Traits\BreadcrumbTrait;
use App\Http\Requests\PasswordChangeRequest;

class SettingsController extends Controller
{
    use BreadcrumbTrait;

    public function createPassword()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Change Password", "Settings", "Change");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.password.create');   
    }

    public function changePassword(PasswordChangeRequest $request)
    {
        $admin = Admin::find(auth()->guard('admin')->user()->id);
        if(!isset($admin) || empty($admin)) {
    		abort(404);
    	}

        if(Hash::check($request->current_password, $admin->password)) {
            $admin->password = Hash::make($request->password);
            $admin->save();

            Session::flash('success', "Your account password changed successfully.");
            return redirect()->back();
        } else {
            Session::flash('alert', 'Incorrect current/existing password, Please try again.');
            return redirect()->back();
        }
    }
}
