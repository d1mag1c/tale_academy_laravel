<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    use Sluggable;

    public $timestamps = false;

    public function sluggable():array  {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }

}
