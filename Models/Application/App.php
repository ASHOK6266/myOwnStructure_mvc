<?php

include('db.php');

class Tasks
{
	
	public function get_task()
	{
		$databse = Database::Singleton();
		$sql = $databse->get_connection()->prepare("SELECT * from todolist");
		$sql->execute();
		$result = $sql->fetchAll();
		//var_dump($result); // checking using var_dump to display the result
	}
	/*
	public function get_task($id)
	{

	}
	*/
	public function post_task()
	{
		$database = Database::Singleton();
		$sql = $database->get_connection()->prepare("INSERT INTO `todolist`(`id`,`title`,`description`) VALUES ('1','first list','This is about the first list')");
		$insert = $sql->execute();
	}
	/*
	public function put_task($id,$title=null,$description=null)
	{

	}
	public function delete_tak($id)
	{

	}
	*/
}

$inserting = new Tasks();
$inserting->post_task();

$show = new Tasks();
$show->get_task();


?>