<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'works';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_url',
        'year',
        'result_link'
    ];
}
