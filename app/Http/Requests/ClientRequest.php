<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientRequest extends Request {

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
			'nom' => 'required|min:3',
			'prenom'=>'required|min:3',
			//'telMobile'=>'required',
			//'raisonSociale'=>'required',
			//'civilite'=>'required',
			'email'=>'required|email|unique:client',
			'identifiant'=>'required|unique:espace_prive',
			'motDePasse'=>'required'


		];
	}

}