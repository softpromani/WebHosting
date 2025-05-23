<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDescriptionService extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'tab_name',
        'tab_icon',
        'header_icon',
        'header_text',
        'service_image',
        'title',
        'description',
    ];
    public function category()
    {
        return $this->belongsTo(CategoryDescription::class, 'category_id');
    }
}
