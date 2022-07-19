<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link'];

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

}
