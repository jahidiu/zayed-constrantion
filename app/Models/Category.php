<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function subcategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parant_id');
    }

    public function parant():BelongsTo
    {
        return $this->belongsTo(Category::class,'parant_id');
    }
    
}
