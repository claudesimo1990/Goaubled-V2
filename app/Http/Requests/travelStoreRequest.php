<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class travelStoreRequest extends FormRequest
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
        return [
            'name' => 'required',
            'vilDepart' => 'required',
            'vilArrive' => 'required',
            'dateDepart' => 'required',
            'content' => 'required',
            'kilo' => 'required',
            'prixCourrier' => 'required',
            'compagnie' => 'required',
            'photoBielletAvion' => 'required',
        ];
    }
}
