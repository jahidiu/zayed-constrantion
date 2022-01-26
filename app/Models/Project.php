<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
