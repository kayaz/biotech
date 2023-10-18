<?php

namespace App\Observers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

// CMS
use App\Models\Product;

class ProductObserver
{
    /**
     * Handle the article "deleted" event.
     *
     * @param Product $product
     * @return void
     */
    public function deleted(Product $product)
    {

    }

    /**
     * Handle the article "saving" event.
     *
     * @param Product $product
     * @return void
     */
    public function saving(Product $product)
    {
        if (app()->getLocale() === 'pl') {
            $product->slug = Str::slug($product->name);
        }
    }
}
