<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MDC extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','college_name', 'college_location', 'college_district', 'college_address', 'funds_allocated', 'funds_received', 'work_progress',
    ];
    protected $table = 'm_d_c_s';
}



