<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
      return view('frontend.pages.homepage');
    }

    public function listings()
    {
      return view('frontend.pages.listings-grid');
    }

    public function propertyDetails()
    {
      return view('frontend.pages.property-details');
    }
}
