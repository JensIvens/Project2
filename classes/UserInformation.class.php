<?php
	
	include_once('DB.class.php');

	class UserInformation
	{
		
		private $m_sFirstName;
		private $m_sLastName;
		private $m_sSex;
		private $m_sEmail;
		private $m_sPhone;
		private $m_sStreet;
		private $m_sPostal;
		private $m_sCity;
		private $m_sDescription;
		private $m_sUserid;
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

				case "Sex":
				$this->m_sSex = $p_vValue;
				break;

				case "Email":
				$this->m_sEmail = $p_vValue;
				break;
				
				case "Phone":
				$this->m_sPhone = $p_vValue;
				break;

				case "Street":
				$this->m_sStreet = $p_vValue;
				break;

				case "Postal":
				$this->m_sPostal = $p_vValue;
				break;

				case "City":
				$this->m_sCity = $p_vValue;
				break;

				case "Description":
				$this->m_sDescription = $p_vValue;
				break;

				case "UserID":
				$this->m_sUserid = $p_vValue;
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

				case 'Sex':
				return $this->m_sSex;
				break;
				
				case 'Email':
				return $this->m_sEmail;
				break;

				case 'Phone':
				return $this->m_sPhone;
				break;

				case 'Street':
				return $this->m_sStreet;
				break;

				case 'Postal':
				return $this->m_sPostal;
				break;

				case 'City':
				return $this->m_sCity;
				break;

				case 'Description':
				return $this->m_sDescription;
				break;

				case 'UserID':
				return $this->m_sUserid;
				break;
			}
		}

	


	public function Save()
	{
		$db = new Db();

		$sql = "update users set 
				userfirstname='".$this->m_sFirstName."',
				userlastname='".$this->m_sLastName."',
				usersex='".$this->m_sSex."',
				userstreet='".$this->m_sStreet."',
				useremail='".$this->m_sEmail."',
				userphone='".$this->m_sPhone."',
				usercity='".$this->m_sCity."',
				userpostalcode='".$this->m_sPostal."',
				userdescribe='".$this->m_sDescription."'
				where userid = '".$this->m_sUserid."';";

		$db->conn->query($sql);
	}
}


?>