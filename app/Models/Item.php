<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $table = 'items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'item_code',
        'description',
        'price',
        'kyat',
        'yway',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
