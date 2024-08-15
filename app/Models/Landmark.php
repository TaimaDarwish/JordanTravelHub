<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'landmarkName',
        'image',
        'description',
        'activities',
        'tripOptions'
    ];

    protected $casts = [
        'activities' => 'array',
        'tripOptions' => 'array',
    ];
    // public function getRouteKeyName() name instead of id 
    // {
    //     return 'landmarkName'; 
    // }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
