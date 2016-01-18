<?php namespace App\Http\Requests\Webinars;

use App\Http\Requests\Request;

class AanbodRequest extends Request {

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
			'aanhef'		=> 'required',
			'voornaam'		=> 'required|min:2',
			'achternaam'	=> 'required|min:2',
			'email'			=> 'required|email',
			'bedrijfsnaam'	=> 'required|min:2',
			'adres'			=> 'required',
			'postcode'		=> 'required',
			'woonplaats'	=> 'required',
			'bedrag'		=> 'required',
		];
	}

}
