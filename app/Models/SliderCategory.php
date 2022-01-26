<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
   
    public function sliders(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
