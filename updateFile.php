<?php
 //Gets the corresponding index of the task to be deleted as input. 
  $i = $_GET["index"];
 //Reads the JSon file
  $string = file_get_contents("tasks.json");
  $tasks = json_decode($string , true);

  //Marks the corresponding task as completed
  $tasks[$i]['completed'] = true;
 
 //Writes the tasks in the tasks.json file
  $string = json_encode($tasks);
  file_put_contents("tasks.json" , $string);

 ?>
