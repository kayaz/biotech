<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidYoutubeUrl implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Use regular expression to check if the URL is a valid YouTube video URL
        return preg_match('/^(https?:\/\/)?(www\.)?youtube\.com\/watch\?v=[\w-]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Podaj poprawny <b>adres url</b> filmu Youtube.';
    }
}
