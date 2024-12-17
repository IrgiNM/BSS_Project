<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;
use App\Models\Ulasan;
use App\Models\OrderSablon;

class Customer extends Model
{
    protected $table = 'users';

    public function orders()
    {
        return $this->hasMany(Orders::class, 'id_customer');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_customer');
    }

    public function sablon()
    {
        return $this->hasMany(OrderSablon::class, 'id_customer');
    }
}
