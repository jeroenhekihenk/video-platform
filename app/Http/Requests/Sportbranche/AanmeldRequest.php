<?php namespace App\Http\Requests\Sportbranche;

use App\Http\Requests\Request;

class AanmeldRequest extends Request {

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
			'voornaam'			=> 'required|min:3',
			'achternaam'		=> 'required|min:3',
			'email'				=> 'required|email',
			'telefoonnummer'	=> 'required',
			'bedrijfsnaam'		=> 'required',
			'optie'				=> 'required'
		];
	}

}
