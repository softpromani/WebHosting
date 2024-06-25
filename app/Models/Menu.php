<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
    public function scopeParentMenus($query)
    {
        return $query->whereNull('parent_id');
    }

    public function products(){
        return $this->hasMany(Product::class,'menu_id');
    }
}
