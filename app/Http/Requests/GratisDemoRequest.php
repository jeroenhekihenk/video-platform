<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GratisDemoRequest extends Request {

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
			'voornaam'		=> 'required|min:2',
			'achternaam'	=> 'required|min:3',
			'email'			=> 'required|email',
			'wachtwoord'		=> 'required|confirmed',
		];
	}

}
