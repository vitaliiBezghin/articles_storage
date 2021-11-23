<?php

namespace App\Http\Requests;

use App\Rules\ArticleDetailCompositeUniqueRule;
use App\Rules\ArticleDetailEnumRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ArticleDetailRequest extends FormRequest
{
    public function __construct(Request $request)
    {
       $r = new ArticleDetailCompositeUniqueRule();
       $r->passes('', $request->all());
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'article_id' => ['required','exists:articles,id'],
            'parent_id' => 'required|unique:article_data_sections,article_id,parent_id,type|numeric',
            'type' => ['required', 'unique:article_data_sections,article_id,parent_id,type' , new ArticleDetailEnumRule]
        ];
    }
}
