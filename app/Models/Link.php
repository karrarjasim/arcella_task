<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['title','link','new_tab'];
    
    protected $casts = [
        'new_tab' => 'boolean',
    ];
    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }
}
