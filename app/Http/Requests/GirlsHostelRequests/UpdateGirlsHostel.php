<?php

namespace App\Http\Requests\GirlsHostelRequests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGirlsHostel extends FormRequest
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
