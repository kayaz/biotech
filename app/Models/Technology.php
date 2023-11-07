<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Technology extends Model
{
    use HasTranslations;
    public array $translatable = ['name', 'file_alt', 'meta_title', 'meta_description', 'desc', 'text'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'slug',
        'file',
        'file_webp',
        'file_alt',
        'meta_title',
        'meta_description',
        'meta_robots',
        'desc',
        'text'
    ];
}