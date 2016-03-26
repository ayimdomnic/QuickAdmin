<?php

use Illuminate\Routing\Controller;

class QuickadminTasksController extends Controller
{
	public function index()
	{
		$items = QuickadminTask::whereUserId(\Auth::user()->id)->get();
		return $items
	}
}
