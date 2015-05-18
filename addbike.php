<?php 
	session_start();

	if(!isset($_SESSION['userid']))
 	{
 		header("location: login.php");
 	}
 	else
 	{
 		include_once('classes/Bikes.class.php');
 		$ownerID = $_SESSION['userid'];
 		echo $ownerID;
/*		$bikeInformation = $bike->getAllInformation($ownerID);
*/	
		if(!empty($_POST['addbike']))
		{
			try 
			{
				$b = new Bike();
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
	<title>We love bikes! - Your bikes</title>

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
		<h2>Jens</h2>	
		<h2 class="profile-location">Mechelen</h2>
		<a href="profile.php" class="btnbackdashboard"><i class="fa fa-arrow-circle-left"></i> Dashboard</a>	
		<ul>
			<li class="profile-welcome">
				Hey Jens, you can add a bike here!
				<p>All the information about your bikes can be found here!</p>
				<?php 
					if(isset($error))
					{
						echo "<p class='error'>$error</p>";
					}
				?>
			</li>
			<li>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

				<p class="infolabel">Bike Name:</p>
				<input type="text" name="bikename" placeholder="Bike Name">
			</li>
			<li>
				<p class="infolabel">Description:</p>
				<textarea cols="40" rows="5" name="describe" placeholder="Description"></textarea>
			</li>
			<li>
				<p class="infolabel">Price per hour:</p>
				<input type="text" placeholder="€ " value="€ " name="priceperhour" >
			</li>
			<li>
				<p class="infolabel">Price per day:</p>
				<input type="text" placeholder="€ " value="€ " name="priceperday" >
			</li>
			<li>
				<p class="infolabel">Price per week:</p>
				<input type="text" placeholder="€ " value="€ " name="priceperweek" >
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