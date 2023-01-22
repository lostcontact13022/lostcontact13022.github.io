<?php

	class Konek{
		public $ip = "localhost", $user="root", $pass="", $db="";

		public function getConnection(){
			$konek =mysqli_connect($this->ip, $this->user, $this->pass, $this->db);
			return $konek
		}
	}