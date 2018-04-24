<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Show Tags Admin 
     *
     * @param  int  $id
     * @return Response
     */

    public function show()
    {
        return view('parts.admin.tags.index');
    }
}