<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        return $this->is('admin/blogs/store') ? $this->createRules() : $this->updateRules();
    }

    // public function messages()
    // {
    //     return [
    //         'id.required' => 'Morate odabrati objekat!',
            
    //         'title.required'=> 'Morate unijeti title!',
    //         'title.max'=> 'Title može sadržati najviše 191 karaktera!',
    //         'image.required' => 'Morate unijeti image!',
    //         'image.max' => 'Maksimalna veličina image je 5mb!',
    //         'image.mimes' => 'Image može biti formata: jpeg,png,jpg,gif,svg!',
    //         'text.required' => 'Morate unijeti text!',
    //         'text.max' => 'Text može sadržati maksimum 10000 karakera!',
    //     ];
    // }

    public function createRules(){
        return [
            
            'title' => 'required|max:191',
            'image' => 'required|max:5000|mimes:jpeg,png,jpg,gif,svg',
            'text' => 'required|max:10000',
        ];
    }

    public function updateRules(){
        return [
            'id' => 'required',
            
            'title' => 'required|max:191',
            'image' => 'required|max:5000|mimes:jpeg,png,jpg,gif,svg',
            'text' => 'required|max:10000',
        ];
    }

    public function validated()
    {
        return array_merge(parent::validated(), [
            'slug' => Str::slug($this->title)
        ]);
    }

}
