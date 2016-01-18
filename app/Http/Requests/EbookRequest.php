<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EbookRequest extends Request {

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
			'naam'					=> 'required|min:3',
			'slogan_titel'			=> 'required',
			'slogan_tekst'			=> 'required',
			'form_link'				=> 'required',
			'form_u'				=> 'required',
			'form_id'				=> 'required',
			'form_token'			=> 'required',
			'form_field1'			=> 'required|min:3',
			'form_field2'			=> 'required|min:3',
			'field1_placeholder'	=> 'required|min:3',
			'field2_placeholder'	=> 'required|min:3',
		];
	}

}
