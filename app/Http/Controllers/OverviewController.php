<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOverview()
    {
        return view('page.overview');
    }
}
