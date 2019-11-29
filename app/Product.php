<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

//    public $timestamps = false;

    protected $fillable = [
        'name',
        'value',
        'description',
        'amount'
    ];

//    protected $guarded = ['id'];

    protected static $rules = [
        'default' => [
            'name' => 'required|max:100',
            'value' => 'required|numeric',
            'description' => 'required|max:255'
        ],
    ];

    protected $dates = ['created_at', 'updated_at'];
}
