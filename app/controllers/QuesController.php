<?php

class QuesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
		{
		return View::make('forum.askques');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	return View::make('forum.askques');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$id= Auth::getUser()->id;
			$name= Auth::getUser()->name;
	
		questions::create(array
			(
			'user_id'=>$id,
			'user_name'=>$name,
			'sub_id'=>Input::get('subject'),
			'question'=>Input::get('question'),
			 ));

		 return Redirect::to('askques')->with('message', 'You are successfully posted your question.');//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 //
	}	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
	$ques = Questions::find($id);
	//return View::make('forum.askques',array('questions'=>$ques));
	return View::make('forum.edit')->with('questions', $ques);
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	
	public function updateQ()
	{
	 	$id=Input::get('Language');
	 //	return $id;
	 	$question = Questions::find($id);
		$question->question = Input::get('question');
		$question->save();
		return "you have successfully updated the question";
	}
	



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id 
	 * @return Response
	 */
	public function destroy($id)
	{
	
	}
}
