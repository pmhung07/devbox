<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show Dashboard Admin User
     *
     * @param  int  $id
     * @return Response
     */

    public function show()
    {
        return view('parts.admin.dashboard.index');
    }
}