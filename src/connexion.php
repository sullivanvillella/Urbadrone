<?php

	function connect(){
		try{

			$username='root';
			$password='root';

			$db=new PDO('mysql:host=localhost;dbname=music_upload;charset=UTF8', $username, $password);
          $db->exec("set names utf8");

		}
		catch(Exception $e){

			echo 'echec:'.$e->getMessage();
			$db=NULL;
		}
		return $db;
	}
?>
