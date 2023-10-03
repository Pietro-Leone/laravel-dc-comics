<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory, SoftDeletes;

    // protected $casts = [
    //     "artists" => "string",
    //     "writers" => "string"
    // ];

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type",
        "artists",
        "writers"
    ];
}
