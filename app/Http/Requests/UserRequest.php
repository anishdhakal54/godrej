<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		if ( $this->method() == 'PATCH' ) {
			$passwordRule = '';
		} else {
			$passwordRule = 'required|confirmed|min:6';
		}

		return [
			'first_name' => 'required|string|max:255',
			'last_name'  => 'required|string|max:255',
			'email'      => 'required|string|email|max:255|unique:users,email,' . $this->segment( 3 ),
			'role'       => 'required|numeric',
			'password'   => $passwordRule,
		];
	}
}
