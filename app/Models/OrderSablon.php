<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class OrderSablon extends Model
{
    protected $table = 'order_sablon';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
