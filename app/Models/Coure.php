<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coure extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'instructor_id'
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    

}
