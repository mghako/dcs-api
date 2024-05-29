<?php

namespace App\Models\OurProject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurProject extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
