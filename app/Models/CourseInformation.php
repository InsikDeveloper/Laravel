<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInformation extends Model
{
    use HasFactory;

    protected $table = 'course_informations'; // Define the correct table name

    protected $fillable = [
        'title',
        'description',
        'duration',
    ];
    
}
