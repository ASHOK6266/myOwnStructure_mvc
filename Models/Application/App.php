<?php

include('db.php');

class Tasks
{
	public function get_task()
	{
		// This is function to get all the tasks from the database
		$databse = Database::Singleton();
		$sql = $databse->get_connection()->prepare("SELECT * from todolist");
		$sql->execute();
		$result = $sql->fetchAll();
		//var_dump($result); // checking using var_dump to display the result
		return ($result);
	}
	/*
	public function get_task($id)
	{
		// similarly,Here you can get the tasks using the id
	}
	
	public function post_task()
	{
		// This function posts the tasks to the database
		$database = Database::Singleton();
		$sql = $database->get_connection()->prepare("INSERT INTO `todolist`(`id`,`title`,`description`) VALUES ('1','first list','This is about the first list')");
		$insert = $sql->execute();
	}
	/*
	public function put_task($id,$title=null,$description=null)
	{
      // Here you can update the tasks id in the database by passing it as a parameter  
	}
	public function delete_task($id)
	{
		// Here you can delete the tasks using the id in the database
	}
	*/
}

// I used the below instantiation for testing purpose

//$inserting = new Tasks();
//$inserting->post_task();

//$show = new Tasks();
//$show->get_task();


?>