<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Ulasan extends Model
{
    protected $table = 'ulasan';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
