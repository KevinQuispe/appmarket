<?php

namespace Market\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      # code...
      return view('dashboards');
    }

    public function modelweb()
    {
      # code...
      return view('');
    }
}
