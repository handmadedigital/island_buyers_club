<?php namespace TGL\Shop\Products\Http\Requests;

use TGL\Core\Http\Requests\Request;

class GetProductOptionsRequest extends Request
{
    /*
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
    public function rules()
    {
        return [
            'selected_options' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}