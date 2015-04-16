<?php

class ViewController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('forum.viewques');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('forum.viewques');
	}

	//getting current session id//
	public function get_ques($id)
	{
			$questions = Questions::with('question')->find($id);
		return View::make('forum.ansques',array('question'=>$questions));
     
	}
	public function get_ans($id)
	{
			$answers = Answer::with('ans')->find($id);
		return View::make('forum.anslist',array('answer'=>$answers));
      
	}
	public function read()
	{
	    $subject = Input::get('subject');
        return View::make('forum.readques')->with('sub_id',$subject);
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
