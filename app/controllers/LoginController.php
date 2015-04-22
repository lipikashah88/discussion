<?php

class LoginController extends BaseController {

	
		 public function postRegister()
    {
        $rules = array(
            'name'             => 'required',                       
            'username'         => 'required',   
            'password'         => 'required',
            'password_confirmation' => 'required|same:password'         
        );

        
        $validator = Validator::make(Input::all(), $rules);
          if ($validator->fails()) {

          
            $messages = $validator->messages();

           
            return Redirect::to('register')
                ->withErrors($validator);

        } else {
            Basemodel::create (array(
                'name'=>Input::get('name'),
                'username'=>Input::get('username'),
                'password'=>Hash::make(Input::get('password'))
            ));
            return Redirect::to('register')
                ->with('message','welcome');
        }
    }
	

 public function postLogin()
    {
        $rules = array(
                             
            'username'         => 'required',     
            'password'         => 'required',
           
        );

    
        $validator = Validator::make(Input::all(), $rules);

     
        if ($validator->fails()) {

          
            $messages = $validator->messages();

          
           return Redirect::to('login')->withErrors($validator);

        }
        else
        {
            $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
           
            if (Auth::attempt($user))
         {
                return Redirect::to('welcome')
                    ->with('flash_notice', 'You are successfully logged in.');
        }
  
        else
        {
            return Redirect::to('login')
            ->with('flash_error', 'Your username/password combination was incorrect.');
           
        } 
      }
   
}
}