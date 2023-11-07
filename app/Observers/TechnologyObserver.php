<?php

namespace App\Observers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

// CMS
use App\Models\Technology;

class TechnologyObserver
{
    /**
     * Handle the article "deleted" event.
     *
     * @param Technology $product
     * @return void
     */
    public function deleted(Technology $product)
    {

    }

    /**
     * Handle the article "saving" event.
     *
     * @param Technology $product
     * @return void
     */
    public function saving(Technology $product)
    {
        if (app()->getLocale() === 'pl') {
            $product->slug = Str::slug($product->name);
        }
    }
}
