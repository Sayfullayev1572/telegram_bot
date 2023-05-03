<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
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
            'title'=>'required|min:10',
            'body'=>'required|max:15|min:10',
            'category_id'=>'digits:5',
            'image'=>'required',
            'slug'=>'required',
            'image'=>'mimes:jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Title ustuni to\'ldirilsin!',
            'body.required'=>'Body ustuni to\'ldirilsin!',
            'category_id.digits'=>'Category ID ustuniga 5 ta raqam yozing!',
            'title.min'=>'sarlavha belgilari soni 10 tada ko\'p bo\'lsin!',
            'slug.required'=>'Slugni to\'ldiring',
            'image.mimes'=>'Rasmni jpg farmatda yuqklang!',
        ];
    }

    public function attributes()
    {
        return [
            'title'=>'sarlavha',
            'category_id'=>'kategorya id',
        ];
    }
}
