<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserNutritionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'id_user' => 'required|integer',
            'id_nutritional_plan' => 'required|integer',
            'id_sport_activity' => 'required|integer',
            'id_nutritional_tag' => 'required|integer',
            'created_date' => 'required|date',
            'updated_date' => 'required|date',
        ];
    } 
}