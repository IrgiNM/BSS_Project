<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Notif extends Model
{
    protected $table = 'notif';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
