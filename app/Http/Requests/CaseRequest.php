<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CaseRequest extends Request {

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
			'titel'						=> 'required|min:3',
			'content'					=> 'required|min:3',
			'uitgelichte_afbeelding'	=> 'required',
			'logo'						=> 'required',
			'categorie_id'				=> 'required',
			'link_klant'				=> 'required',
			'link_project'				=> 'required',
		];
	}

}
