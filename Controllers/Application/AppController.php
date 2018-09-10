<?php

include('../../Models/Application/App.php');

class AppController
{
	public function show_tasks()
	{
		$show = new Tasks();
		$show->get_task();
	}
}


?>