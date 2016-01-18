<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BlogPostRequest extends Request {

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
			'published_at'				=> 'required|date',
			'categorie_id'				=> 'required',
			'user_id'					=> 'required',
		];
	}

}
