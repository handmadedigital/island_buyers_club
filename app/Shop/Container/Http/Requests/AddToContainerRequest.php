<?php namespace TGL\Shop\Container\Http\Requests;

use TGL\Core\Http\Requests\Request;

class AddToContainerRequest extends Request
{
    /*
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
    public function rules()
    {
        return [
            'variant_id' => 'required:integer'
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