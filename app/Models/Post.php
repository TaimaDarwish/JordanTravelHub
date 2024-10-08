<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body','landmark_id','user_id'];

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
   
    /**
     *
     * Relations
     * 
     */
    public function landmark()
    {
        return $this->belongsTo(Landmark::class , "landmark_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
}
