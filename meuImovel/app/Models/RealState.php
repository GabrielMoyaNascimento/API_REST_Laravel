<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'bedrooms',
        'bathrooms',
        'property_area',
        'total_property_area',
        'content',
        'slug',
        'user_id',

    ];
    protected $table = 'real_state';
    public function user() {

        return $this->belongsTo('App\Models\User');
    }
}