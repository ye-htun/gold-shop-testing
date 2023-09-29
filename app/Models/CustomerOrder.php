<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $table = "customer_orders";
    protected $fillable = [
        'item_id',
        'customer_id',
        'confirm_status',
        'confirm_price',
        'org_price',
        'remark',
        'total'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function customers(){
        return $this->hasOne(Customer::class,'id','customer_id')->withDefault();
    }

    public function items(){
        return $this->hasOne(Item::class,'id','item_id')->withDefault();
    }

}
