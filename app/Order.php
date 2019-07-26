<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'billing_email', 'billing_first_name', 'billing_last_name', 'billing_address',
        'billing_phone', 'billing_name_on_card', 'billing_discount',
        'billing_discount_code', 'billing_total', 'error'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function products() {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
