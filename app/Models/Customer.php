<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = 'customers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'address',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot(['price', 'name', 'name']);
    }
}
