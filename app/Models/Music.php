<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posterImage()
    {
        $imagepath = $this->poster;

        return '/storage/' . $imagepath;
    }

    public function coverImage()
    {
        $coverpath = $this->cover;
        
        return '/storage/' . $coverpath;
    }
}
