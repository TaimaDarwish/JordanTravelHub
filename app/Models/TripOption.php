<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripOption extends Model
{
    // Define the inverse relationship with landmark
    public function landmark()
    {
        return $this->belongsTo(Landmark::class);
    }
}
