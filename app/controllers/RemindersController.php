<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('passwordReset');
	}
	public function afterSend() {
		return View::make('pass_reset_email_sent');
	}
	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		switch ($response = Password::remind(Input::only('email'),function($message){
			$message -> subject("password reminder");
		}))
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));

			case Password::REMINDER_SENT:
				return Redirect::to('password/notify');
				//return Redirect::back()->with('status', Lang::get($response));
		}
		//return Redirect::to('password/notify');
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('pass_reset_input')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
		/*$validator=Password::validator(function($credentials){
			return strlen($credentials['password'])>2;
		});*/

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);

			$user->save();
		});

		/*if($validator->fail()){*/
			//$messages=$validator->messages();
			//return Redirect::to('password.reset')->withErrors($validator);
		 
			switch ($response)
		{
			case Password::INVALID_PASSWORD:
				return Redirect::back()->with('error', Lang::get($response));
			case Password::INVALID_TOKEN:
				return Redirect::back()->with('error', Lang::get($response));
			case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));

			case Password::PASSWORD_RESET:
				return Redirect::to('/');
		}
		
	}

}
