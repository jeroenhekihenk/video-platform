<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TijdlijnActieRequest extends Request {

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
			'achternaam'	=> 'required|min:3',
			'email'			=> 'required|email',
			'adres'			=> 'required',
			'postcode'		=> 'required',
			'woonplaats'	=> 'required',
			'land'			=> 'required',
			'paymentmethod'	=> 'required',
		];
	}

}