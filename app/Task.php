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


}
