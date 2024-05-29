<?php

namespace App\Models\OurService;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicePost extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
