<?php 
	session_start();

	if(!isset($_SESSION['userid']))
 	{
 		header("location: login.php");
 	}
 	else
 	{
 		include_once('classes/User.class.php');
		$user = new User();
 		$ownerID = $_SESSION['userid'];
 		echo $ownerID;
		$userName = $user->getAllInformation($ownerID);
	
		if(!empty($_POST['profileupdate']))
		{
			include_once("classes/UserInformation.class.php");
			try 
			{
				$u = new UserInformation();
				$u->FirstName = $_POST['firstname'];
				$u->LastName = $_POST['lastname'];
				$u->Sex = $_POST['usersex'];
				$u->Email = $_POST['email'];
				$u->Phone = $_POST['phone'];
				$u->Street = $_POST['street'];
				$u->Postal = $_POST['postal'];
				$u->City = $_POST['city'];
				$u->Description = $_POST['describe'];
				$u->UserID = $_SESSION['userid'];
				$u->Save();
/*				Header ('Location: profile.php');
*/			



				$target_dir = mkdir("images/" . $ownerID . "/");
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    
				    $temp = explode(".",$_FILES["fileToUpload"]["name"]);
					$newfilename = "logo." . end($temp);
					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "images/".$ownerID ."/" . $newfilename);
				}




			} 
			catch (Exception $e) 
			{
				$error = $e->getMessage();	
			}
		}
 	}


?><!DOCTYPE html>
<html>
<head>
	<title>We love bikes! - Personal information</title>

	<?php 
		include('head.php');
	?>

</head>
<body>
	
	<?php 
		include('nav.php');
	?>
	 
	<section id="profile">
		<img src="images/<?php echo $ownerID . '/' ?>logo.jpg">
		<?php 
			foreach ($userName as $userInfo) { ?>
				<h2><?php echo ucfirst($userInfo['userfirstname']); ?></h2>
			<?php }
		 ?>	
		<h2 class="profile-location"><?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['usercity']);} ?></h2>
		<a href="profile.php" class="btnbackdashboard"><i class="fa fa-arrow-circle-left"></i> Dashboard</a>	
		<ul>
			<li class="profile-welcome">
				Welcome <?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userfirstname']);} ?>!
				<p>You can change your personal information below</p>
				<?php 
					if(isset($error))
					{
						echo "<p class='error'>$error</p>";
					}
				?>
			</li>
			<li>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

				<p class="infolabel">First Name:</p>
				<input type="text" name="firstname" placeholder="First Name" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userfirstname']);} ?>" >
			</li>
			<li>
				<p class="infolabel">Last Name:</p>
				<input type="text" name="lastname" placeholder="Last Name" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userlastname']);} ?>">
			</li>
			<li>
				<p class="infolabel">I am:</p>
				<select id="user_sex" name="usersex">
					<option>Gender</option>
					<option value="male" selected="selected">Male</option>
					<option value="female">Female</option>
				</select>
			</li>
			<li>
				<p class="infolabel">Birth date:</p>
				<select id="birthday" name="birthday" class="selectfloat">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18" selected="selected">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select id="birthmonth" name="birthmonth" class="selectfloat">
					<option value="jan">Januari</option>
					<option value="feb">Februari</option>
					<option value="mar" selected="selected">March</option>
					<option value="apr">April</option>
					<option value="may">May</option>
					<option value="jun">June</option>
					<option value="jul">July</option>
					<option value="aug">August</option>
					<option value="sept">September</option>
					<option value="oct">October</option>
					<option value="nov">November</option>
					<option value="dec">December</option>
				</select>
				<select id="birthyear" name="birthyear">
					<option value="97">1997</option>
					<option value="96">1996</option>
					<option value="95">1995</option>
					<option value="94" selected="selected">1994</option>
					<option value="93">1993</option>
					<option value="92">1992</option>
					<option value="91">1991</option>
					<option value="90">1990</option>
					<option value="89">1989</option>
					<option value="88">1988</option>
					<option value="87">1987</option>
					<option value="86">1986</option>
					<option value="85">1985</option>
					<option value="84">1984</option>
					<option value="83">1983</option>
					<option value="82">1982</option>
					<option value="81">1981</option>
					<option value="80">1980</option>
					<option value="79">1979</option>
					<option value="78">1978</option>
					<option value="76">1976</option>
					<option value="75">1975</option>
					<option value="74">1974</option>
					<option value="73">1973</option>
					<option value="72">1972</option>
					<option value="71">1971</option>
					<option value="70">1970</option>
				</select>
			</li>
			<li>
				<p class="infolabel">Email:</p>
				<input type="email" placeholder="Email" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['useremail']);} ?>" name="email" >
			</li>
			<li>
				<p class="infolabel">Phone number:</p>
				<input type="tel" name="phone" placeholder="Phone number" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userphone']);} ?>" />
			</li>
			<li>
				<p class="infolabel">Street + number:</p>
				<input type="text" name="street" placeholder="Street + number" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userstreet']);} ?>" />
			</li>
			<li>
				<p class="infolabel">Postal code:</p>
				<input type="text" name="postal" placeholder="Postal code" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userpostalcode']);} ?>" />
			</li>
			<li>
				<p class="infolabel">City:</p>
				<input type="text" name="city" placeholder="City" value="<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['usercity']);} ?>" />
			</li>
			<li>
				<p class="infolabel">Describe yourself:</p>
				<textarea cols="40" rows="5" name="describe" placeholder="Description">
					<?php foreach ($userName as $userInfo) {echo ucfirst($userInfo['userdescribe']);} ?>
				</textarea>
			</li>
			<li>
				<p class="infolabel">Change profilepicture:</p>
				<input type="file" name="fileToUpload" id="fileToUpload">
			</li>
			<li>
				<input type="submit" name="profileupdate" value="Submit!" class="submitbutton">
			</li>
		</ul>
		
		<ul class="quicklinks">
			<li class="quicklinktitle profile-welcome">Quicklinks</li>
			<li>
				<a href="profile.php">Dashboard</a>
			</li>
			<li>
				<a href="bikes.php">Bikes</a>
			</li>
			<li>
				<a href="messages.php">Messages</a>
			</li>
		</ul>
	</section>


	
	
	<?php 
		include('footer.php') 
	?>
	<?php 
		include('scripts.php');
	?>
</body>
</html>