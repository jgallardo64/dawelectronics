<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function subcategory() {
        return $this->belongsTo('App\Subcategory');
    }

    public function provider() {
        return $this->belongsTo('App\Provider');
    }

    public function taxes() {
        return $this->belongsTo('App\Taxes');
    }
}
