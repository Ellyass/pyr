<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;
use App\Model\Product;
use App\Model\Explanation;
use App\Model\Seller;
use App\Model\CustomerEmail;
use App\Model\OfferFile;
use App\User;
use App\Model\TargetSeller;

class Offer extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer');

    }
   public function explanations()
   {
       return $this->hasMany('App\Model\Explanation');
   }
   /*
    public function seller() {
      $seller =   \App\Model\Seller::where('offer_id', $this->id)->first();
      if ($seller) {
          return  $seller->seller_name;
      }
       return 'Satıcı belirtilmemiş';
    }
*/
    public function email()
    {
        return $this->belongsTo('App\Model\CustomerEmail');
    }
    public function files()
    {
        return $this->hasMany('App\Model\OfferFile');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $dates = [
        'offer_date'
    ];

    public function seller()
    {
        return $this->belongsTo('App\Model\TargetSeller', 'target_seller_id', 'id');

    }
    public function target()
    {
        return $this->belongsTo('App\Model\Target', 'target_seller_id', 'target_seller_id');

    }
    public function tproduct()
    {
        return $this->belongsTo('App\Model\Product', 'product', 'id');

    }

    public function getProduct()
    {
        $product = Product::where('id', $this->product)->first();
        if ($product) {
            return $product->name;
        }
        return null;

    }

}
