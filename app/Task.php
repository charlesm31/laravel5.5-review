<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   

    protected $fillable = ['body'];

    //Query Scope
    public function scopeIncomplete($query)
    {
        return $query->where('isCompleted', 0);
    }   

    // Relationships

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    // Represent a Real Life Scenario
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));        
    }
    


}
