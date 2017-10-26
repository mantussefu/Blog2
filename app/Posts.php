<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addComment($body){
        $this->comments()->create(compact('body'));
    }
}
