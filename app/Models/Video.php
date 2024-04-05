<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'length', 'slug', 'url', 'thumbnail', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthInHumanAttribute()
    {
        return gmdate('i:s', $this->length);
    }

    public function getCreatedAtAttribute($value)
    {
        return verta($value)->formatDifference();
    }

    public function relatedVideos(int $count = 6)
    {
        return $this->all()->random($count);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
