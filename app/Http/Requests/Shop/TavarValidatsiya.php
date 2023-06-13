<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class TavarValidatsiya extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name'=>'required|min:3|max:16',
                'bolim'=>'required',
                'image'=>'required|file|mimes:jpeg,png,jpg,svg|max:2048',
                'taminotchi'=>'required',
                'price'=>'required',
                'shop_price'=>'required',
                'count'=>'required',
        ];
    }
}
