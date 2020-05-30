<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorRequest extends FormRequest
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
        return $this->is('admin/actors/store') ? $this->createRules() : $this->updateRules();
    }

    // public function messages()
    // {
    //     return [
    //         'id.required' => 'Morate odabrati objekat!',
            
    //         'full_name.required'=> 'Morate unijeti full name!',
    //         'full_name.max'=> 'Full name može sadržati najviše 191 karaktera!',
    //         'country.required'=> 'Morate unijeti country!',
    //         'country.max'=> 'Country može sadržati najviše 191 karaktera!',
    //         'birth_date.required' => 'Morate unijeti birth date!',
    //         'birth_date.date_format' => 'Birth date mora biti dormata d/m/y!',
    //         'image.required' => 'Morate unijeti image!',
    //         'image.max' => 'Maksimalna veličina image je 5mb!',
    //         'image.mimes' => 'Image može biti formata: jpeg,png,jpg,gif,svg!',
    //         'overview.required' => 'Morate unijeti overview!',
    //         'overview.max' => 'Overview može sadržati maksimum 10000 karakera!',
    //         'biography.required' => 'Morate unijeti biography!',
    //         'biography.max' => 'Biography može sadržati maksimum 10000 karakera!',
    //     ];
    // }

    public function createRules(){
        return [
            
            'full_name' => 'required|max:191',
            'country' => 'required|max:191',
            'birth_date' => 'required|date_format:d/m/Y',
            'image' => 'required|max:5000|mimes:jpeg,png,jpg,gif,svg',
            'overview' => 'required|max:10000',
            'biography' => 'required|max:10000',
        ];
    }

    public function updateRules(){
        return [
            'id' => 'required',
            
            'full_name' => 'required|max:191',
            'country' => 'required|max:191',
            'birth_date' => 'required|date_format:d/m/Y',
            'image' => 'required|max:5000|mimes:jpeg,png,jpg,gif,svg',
            'overview' => 'required|max:10000',
            'biography' => 'required|max:10000',
        ];
    }

    public function validated()
    {
        return array_merge(parent::validated(), [
            'slug' => Str::slug($this->full_name)
        ]);
    }

}
