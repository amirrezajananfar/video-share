<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'length', 'slug', 'url', 'thumbnail', 'description'];

    public function getLengthAttribute($value)
    {
        return gmdate('i:s', $value);
    }

    public function getCreatedAtAttribute($value)
    {
        return verta($value)->formatDifference();
    }
}
