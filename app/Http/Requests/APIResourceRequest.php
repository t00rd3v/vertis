<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class APIResourceRequest extends FormRequest
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

    public function resourceValidations(){

        return [
            'orders' => [
                'service_id' => 'required|int|exists:services,id',
                'user_id' => 'required|int|exists:users,id',
                'plan_id' => 'required|int|exists:plans,id'
            ]
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules($resource)
    {
        return (new static)->resourceValidations()[$resource];
    }
}
