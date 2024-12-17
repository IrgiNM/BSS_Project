<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Orders extends Model
{
    protected $table = 'checkout';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
