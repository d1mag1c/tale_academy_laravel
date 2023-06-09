<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function  products(): BelongsToMany {
        return  $this->belongsToMany(Product::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
