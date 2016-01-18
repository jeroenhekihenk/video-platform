<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FacebookAdviesRequest extends Request {

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
			'naam'			=> 'required|min:5',
			'bedrijfsnaam'	=> 'required|min:3',
			'telefoonnummer'=> 'required',
			'email'			=> 'required',
		];
	}

}
