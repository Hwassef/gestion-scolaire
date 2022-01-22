<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
class ManageDepartmentAdminController extends Controller
{
    public function index()
    {
        View::addLocation('/themes/admin/views');
        View::addNamespace('theme', '/themes/admin/views');
        return view::make('manage_admin_derpatment');
    }

    public function store(Request $request)
    {
        $departmentAdmin = new DepartmentAdmin();
        $departmentAdmin -> full_name = $request -> full_name;
        $departmentAdmin -> department = $request -> department;
        $departmentAdmin -> email = $request -> email;
        $departmentAdmin -> password = Hash::make(($request->password));
        $departmentAdmin -> save();
    }
}
