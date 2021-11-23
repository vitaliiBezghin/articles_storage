<?php

namespace App\Rules;

use App\Enums\ArticleDetailEnum;
use Illuminate\Contracts\Validation\Rule;

class ArticleDetailEnumRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        return in_array($value, ArticleDetailEnum::TYPES);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "This type is not available. Available types are: " . implode(', ', ArticleDetailEnum::TYPES);
    }
}
