<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }
    public function skill_level()
    {
        return $this->belongsTo(SkillLevel::class,'skill_level_id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class,'language_id');
    }
}
