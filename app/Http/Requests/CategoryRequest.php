<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return $this->is('admin/categories/store') ? $this->createRules() : $this->updateRules();
    }

    public function messages()
    {
        return [
            'id.required' => 'Category must be selected!',
            'name.required'=> 'Name cannot be empty!',
            'name.max'=> 'Name can contain max 191 characters!',
        ];
    }

    public function createRules(){
        return [
            'name' => 'required|max:191',
            'image' => 'required|max:5000|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function updateRules(){
        return [
            'id' => 'required',
            'image' => 'nullable|max:5000|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|max:191'
        ];
    }

}
