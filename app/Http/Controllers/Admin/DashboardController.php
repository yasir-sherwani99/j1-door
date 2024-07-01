<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\BreadcrumbTrait;

class DashboardController extends Controller
{
    use BreadcrumbTrait;

    public function getDashboard()
    {
        // page title and breadcrumbs
        $breadcrumbs = $this->getPagebreadcrumbs("Dashboard", null, "Dashboard");
        view()->share('breadcrumbs', $breadcrumbs);

        return view('admin.dashboard.index');
    }
}
