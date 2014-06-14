<?php

class PagesController extends BaseController {

	function register()
	{
		/*
		if(Sentry::check()){
			return Redirect::to('myaccount');
	  	}
	  	*/
		return View::make("user.register")->with("title","the eden - Register")
		->with("page_title","Register")->with('class','register');
	}

	function postRegister()
	{
  		$rules = array(
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        );
        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Redirect::to('register')->withInput()
										   ->withErrors($validation)
										   ->with('message', 'There were validation errors.');
        }

		try
		{
			$user = Sentry::register(array(
				'email'    => Input::get('email'),
				'password' => Input::get('password'),
				'first_name' => Input::get('first_name'),
				'last_name'  => Input::get('last_name')
			), true);

			if ($user)
			{
				/*
				$subscribe = new Subscribe;
				$subscribe->email = Input::get('email');
				$subscribe->save();
				*/
				return Redirect::to('login')->with('success','Hey! You have been registered successfully.');
			}
		}
		catch (Sentry\SentryException $e)
		{
			$errors = new Laravel\Messages();
			$errors->add('sentry', $e->getMessage());
        	return Redirect::to('register')->withInput()->withErrors($errors); // catch errors such as user exists or bad fields
		}
	}

	public function getLogin()
	{
		if(Sentry::check()){
			return Redirect::to('myaccount');
		}
		return View::make("user.login")
			->with("title","the eden - Login")
			->with("page_title","Login")
			->with('class','login');
	}

	public function myaccount()
	{

		if(!Sentry::check()){
			return Redirect::to('login')->with("error", "Please login to access your account");
		}

		$user = Sentry::getUser();
		return View::make("user.dashboard")
			->with("title","the eden - My Account")
			->with("page_title","My Account")
			->with('class','myaccount')
			->with('user',$user);
	}

	public function accountsetting()
	{
		if(!Sentry::check()){
			return Redirect::to('login')->with("error", "Please login to access your account");
		}
/*
		$orders = DB::table('eden')
			->where('user_id','=',$user->id)->get();
		$pcredit = DB::table('usercreditorders')
			->where('user_id','=',$user->id)
			->orderBy('svn_fs_node_created_rev(fsroot, path)at','DESC')->get();
*/
		$user = Sentry::getUser();
		return View::make("user.accountsetting")
			->with("title","the eden - Accounse Setting")
			->with("page_title","Account Setting")
			->with('class','myaccount')
			->with('user',$user);
	}



	function postLogin()
	{
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required'
		);
		$input = Input::get();
		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Redirect::to('login')
				->withInput()
				->withErrors($validation);
		}

		$credentials = array( 
			'email'   => Input::get('email'), 
			'password'=> Input::get('password')
		);

		if (Sentry::authenticate($credentials, false))
		{
		    return Redirect::to('myaccount');
		}
		else
		{
			return Redirect::to('login')->with("error", "There is problem with login please try again");
		}

	}

	function changepassword()
	{
	  $rules = array(
			'old_password' => 'required',
			'password' => 'required|different:old_password|confirmed',
			'password_confirmation' => 'required',
	    );
		$input = Input::get();
		$validation = Validator::make($input, $rules);

		if ($validation->fails()) {
			return Redirect::to('myaccount')->withInput()->withErrors($validation);
		}

		try
		{
			$user = Sentry::getUser();
			if (! $user->checkPassword(Input::get('old_password'))){
				return Redirect::to('myaccount')->with('error', 'Your old password is not matching with your provided input.');
			}

			$user->password = Input::get('password');
			if ($user->save())
			{
				return Redirect::to('myaccount')->with('success', 'Your password  has been updated successfully.');
			}
			else
			{
				return Redirect::to('myaccount')->with('error', 'Your password has been not update successfully.');
			}
		}
		catch (Sentry\SentryException $e){
	  		$errors = new Laravel\Messages();
            $errors->add('sentry', $e->getMessage());
            return Redirect::to('myaccount')->withInput()->withErrors($errors);
		}
	}

	function postProfile(){

		$rules = array(
		'email' => 'required|email|unique:users,email,'.$user['id'],
		);

		$input = Input::get();
		$validation = Validator::make($input, $rules);
		if ($validation->fails()) {
			return Redirect::to('myaccount')->withInput()->withErrors($validation);
		}

		$user_data = array(
			'email'    => Input::get('email'),
			'first_name' => Input::get('first_name'),
	 		'last_name'  => Input::get('last_name'),
		);

		if ($user->update($user_data))
		{
			return Redirect::to('myaccount')->with('success', 'Your information has been updated successfully.');
		}
		else
		{
			return Redirect::to('myaccount')->with('error', 'Something went wrong!.');
		}
	}

	function logout(){
		Sentry::logout();
			return Redirect::to('/');
	}


}