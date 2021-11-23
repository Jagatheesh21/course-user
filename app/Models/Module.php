<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->hasMany(ModuleSection::class);
    }
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
}
