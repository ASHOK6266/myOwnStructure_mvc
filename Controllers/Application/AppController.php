<?php

include('../../Models/Application/App.php');

//The controllers will invoke the model, mostly logic part goes here 
class AppController
{
	public function show_tasks()
	{
		$show = new Tasks();
		$display = $show->get_task();
		//var_dump($display);
		foreach ($display as $key => $displays) 
		{
			 $display[$key]['title'] = htmlspecialchars($displays['title']);
			 $display[$key]['description'] = nl2br(htmlspecialchars($displays['description']));
		}
		return $display[$key]['description'];
	}
}



 //Below instatiation is also for testing purposes

$show = new AppController();
$show->show_tasks();



?>