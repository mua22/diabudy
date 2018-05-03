<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSugarLevelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        //dd($this->user_id);
        if($this->user_id==$user->id){
            //dd($this->user_id);
            return true;
        }

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
            'reading'=>'required',
            'sugar_category_id'=>'required',
            'record_time'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'sugar_category_id.required'=>'Please Select a Category',
            'reading.required'=>'Please provide a reading',
            'record_time.required'=>'Please provide a date',
        ];
    }
}
