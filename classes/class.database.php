<?php 

	class Database{
		private $host;
		private $database_name;
		private $user;
		private $password;

		public $link;

		public function Database($host,$database_name,$user,$password){
			$this->host = $host;
			$this->database_name = $database_name;
			$this->user = $user;
			$this->password = $password;

			//method to create PDO class
			$this->connect();
		}

		public function connect(){
			$this->link = mysql_connect($this->host , $this->user, $this->password) or die(mysql_error("No connection"));
			mysql_select_db($this->database_name) or die(mysql_error("geen DB gevonden"));
		}

		public function disconnect(){
			msql_close($this->link);
		}

	}
?>