<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Listing\AffiliateListing;

class PageController extends Controller
{
    public function index()
    {
      $listings = AffiliateListing::listings();

      echo "<pre>"; print_r($listings); echo "</pre>";

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
