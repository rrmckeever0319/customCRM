<?php
	if(!class_exists('DB')){
		class DB{
			public function __construct(){
				$mysqli = new mysqli('localhost', 'root', '','crmdb');

				if($mysqli->connect_errno){
					printf('Connection Failed %s\n', $mysqli->connect_errno);
					exit();
				}
				$this->connection =  $mysqli;
			}

			public function insert(){
				$mysqli = $this->connection;
				$query = "
							INSERT INTO posts(post_title, post_content, post_category)
							VALUES('Mr.Title','This should be some content relating to something ','Book')
				";

				$result = $mysqli->query($query);
				return $result;

			}
		}
	}

?>