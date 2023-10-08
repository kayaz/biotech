<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Boxes extends Model
{
    use HasTranslations;
    public array $translatable = ['title', 'text', 'file_alt'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_id',
        'title',
        'text',
        'file',
        'file_alt',
        'link',
        'link_button',
        'link_target',
        'aos_animation',
        'aos_duration',
        'aos_delay',
        'aos_offset',
        'sort'
    ];
}
