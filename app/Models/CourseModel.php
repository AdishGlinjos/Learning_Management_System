<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{

    protected $table="course";

    protected $primaryKey="course_id";

    protected $fillable = ['course_name', 'course_description', 'course_price','is_active'];
        public $timestamps = false;

}
