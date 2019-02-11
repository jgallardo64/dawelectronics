<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderOrder extends Model
{
    public function provider() {
        return $this->belongsTo('App\Provider');
    }
}
