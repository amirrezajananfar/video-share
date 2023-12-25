<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Video extends Model
{
    use HasFactory;

    protected $perPage = 12;

    protected $fillable = ['name', 'length', 'slug', 'url', 'thumbnail', 'description', 'category_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthInHumanAttribute($value)
    {
        return gmdate('H:i:s', $value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }

    public function relatedVideos(int $count = 5, $currentVideoSlug)
    {
        return $this->category->getRandomVideos($count, $currentVideoSlug);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }

    public function getCategorySlugAttribute()
    {
        return $this->category?->slug;
    }
}
