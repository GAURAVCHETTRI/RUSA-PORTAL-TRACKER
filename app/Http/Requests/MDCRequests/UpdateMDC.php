<?php

namespace App\Http\Requests\MDCRequests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMDC extends FormRequest
{
    /**
     * Determine if the role is authorized to make this request.
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
        $data = 		array (
		);
        return $data;
    }
}
