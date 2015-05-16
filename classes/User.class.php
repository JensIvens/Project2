<?php
	
	include_once('DB.class.php');

	class User
	{
		
		private $m_sFirstName;
		private $m_sLastName;
		private $m_sEmail;
		private $m_sPassword;
		private $m_sSalt = "NCSCNIDC8Z625è!èç";
		public $errors = array();

		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty)
			{
				case "FirstName":
				$this->m_sFirstName = $p_vValue;
				break;

				case "LastName":
				$this->m_sLastName = $p_vValue;
				break;

				case "Email":
				$this->m_sEmail = $p_vValue;
				break;
				
				case "Password":
				//check if password is at least 5 chars long
				if(strlen($p_vValue) < 5)
				{
					throw new Exception("Password must be at least 5 characters long.");
				}
				$this->m_sPassword = md5($p_vValue);
				break;
			}
		}


		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case 'FirstName':
				return $this->m_sFirstName;
				break;
				
				case 'LastName':
				return $this->m_sLastName;
				break;

				case 'Email':
				return $this->m_sEmail;
				break;
				
				case 'Password':
				return $this->m_sPassword;
				break;
			}
		}

	


	public function Save()
	{
		$db = new Db();

		$sql = "insert into users 
				(userfirstname,
				userlastname, 
				useremail, 
				userpass)
				values (
				'".$this->m_sFirstName."', 
				'".$this->m_sLastName."', 
				'".$this->m_sEmail."', 
				'".$this->m_sPassword."'
				);";

		$db->conn->query($sql);
	}


	public function __toString()
	{
		$result = "<h1>".$this->m_sName . "</h1>";
		$result.= "<p>Email: ".$this->m_sEmail . "</p>";
		return $result;
	}

	public function Login($email, $password)
	{
		$db = new Db();

		//hash the password first
		$hashedPass = md5($password);

		//check if the given email matches the given password
		$sql = "SELECT * FROM users WHERE useremail = '$email' AND userpass = '$hashedPass'";

		$result = $db->conn->query($sql);

		$countRecords_Account = mysqli_num_rows($result);


		$results = mysqli_fetch_array($result, MYSQL_ASSOC);

		$userID = $results['userid'];
		if($result)
		{
			//if the inputs match and only 1 record gets thrown, give him an idintification key
			if($countRecords_Account == 1)
			{
				$_SESSION['userid'] = $userID;
				header('location: profile.php');
			}
			//if they don't match, throw an error and no key
			else
			{
				$this->errors['errorLogin'] = "Your email and/or password are wrong!";
			}
		}
	}
}


?>