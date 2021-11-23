<?php

namespace App\Rules;

use App\Models\ArticleDetail;
use Illuminate\Contracts\Validation\Rule;

class ArticleDetailCompositeUniqueRule implements Rule
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
       if(is_array($value) && !empty($value)) {
           if($value['article_id'] && $value['parent_id'] && $value['type']) {
                $record = ArticleDetail::where('article_id', $value['article_id'])
                    ->where('parent_id', $value['parent_id'])
                    ->where('type', $value['type'])->first();
                    if($record) {
                        return false;
                    }
                return true;
           }else{
                return true;
           }
       }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Combination of values is already exist .';
    }
}
