<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Support\Str;

class PutRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            // 'slug' => Str::slug($this->title),
            //'slug' => Str::of($this->title)->slug()->append('-adicional'),
            'slug' => str($this->title)->slug(),
        ]);
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
            "title" => "required|min:5",
            "slug" => "required|min:5|max:500|unique:posts,slug,".$this->route("post")->id,
            "content" => "required|min:7",
            "category_id" => "required|integer",
            "description" => "required|min:7",
            "posted" => "required",
            "image" => "mimes:jpg,jpeg,png|max:10240",

        ];
    }
}