<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Translatable\HasTranslations;

class Url extends Model
{
    use NodeTrait, HasTranslations;
    public $translatable = ['title', 'content_header', 'meta_title', 'meta_description'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'active',
        'type',
        'parent_id',
        'title',
        'uri',
        'url',
        'url_target',
        'content_header',
        'meta_title',
        'meta_description',
        'meta_robots'
    ];
}
