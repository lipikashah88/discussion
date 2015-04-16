<?php 
class Basemodel extends Eloquent {
		protected $table='users';
        protected $guarded = array();

         public static $rules = array(
        'name'             => 'required|name',  
        'username'          =>'required',
        'password'          =>'required'
  
  );

         public static function validate($data){
         	return Validator::make($data,static::$rules);
         }
}
