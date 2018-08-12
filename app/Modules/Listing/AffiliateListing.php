<?php

namespace App\Modules\Listing;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Listing\Listing;

class AffiliateListing extends Model
{
    protected $table = 'affiliate_listings';

    public static function listings()
    {
      if (!auth()->user()) return;

      $listing_ids = AffiliateListing::where('user_id', auth()->user()->id)->get()->pluck('listing_id');
      if (!$listing_ids) return;

      $listings = Listing::whereIn('id', $listing_ids)->get();

      return $listings;
    }
}
