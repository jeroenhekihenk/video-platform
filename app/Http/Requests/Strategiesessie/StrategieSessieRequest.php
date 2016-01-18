<?php namespace App\Http\Requests\Strategiesessie;

use App\Http\Requests\Request;

class StrategieSessieRequest extends Request {

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
			'achternaam'	=> 'required|min:2',
			'bedrijfsnaam'	=> 'required|min:2',
			'email'			=> 'required|email',
			'website_url'	=> 'required',
			'facebook_url'	=> 'required',
		];
	}

}
