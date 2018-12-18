<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PhotosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return Auth::check();
	    return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	dd($this->request->all());
	    $rules = [
		    'category' => 'required|string',
		    'maker' => 'nullable|string',
		    'photos.*' => 'required'
	    ];

	    return $rules;
    }
}
