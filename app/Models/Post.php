<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{

    use HasApiTokens, HasFactory, Notifiable;


    /**
     * Post model
     */

    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Post belong to user
     */
    public function users(){
        return $this->belongsTo(User::class);
    }
}
