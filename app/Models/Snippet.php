<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'descreption', 'snippet'];

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }
    
}
