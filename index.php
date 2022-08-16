<!DOCTYPE html>
<html>
	<head>
		<title>LTPKK | HOME</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/b.css">
		<style type="text/css">
			/* cyrillic-ext */
	
			.home_holder
			{
				max-width: 70%;
				background-color: rgba(255,255,255,0.8);
				height: 550px;
				
				margin-top: 20px;
				display: block;
				
				margin: auto;
			}
			.col
			{
				
				height: 100%;
				position: relative;
				display: block;
				box-sizing: border-box;
			}
			.home_bg_image
			{
				width: 100%;
				position: absolute;
				bottom: 0;
				box-sizing: border-box;
				
			}
			.btn
			{
				width: 100%;
				height: 70px;
				background-color: white!important;
				font-weight: bolder;
				font-size: larger;
				border-radius: 0!important;

			}
			.btn:hover
			{
				background-color: red!important;color:white!important;
			}
		</style>
	</head>
	<body>
		<br>
		<br>
	
		<div class="container home_holder">
		<div class="row container-fiuld" style="height: 100%">
			<div class="col"  style="background-color: #04428d	">
				<br>

				<br><img src="assets/images/logo.jpg" style="width: 100px;margin: auto;display: block;box-shadow: 0 0 20px #ffffff29;">
				<br>
				<br>	
				<br>
				<h1 style="color: white;text-align: center;font-weight: bolder;font-size:30pt">
					LET THE PUBLIC KNOW KEN
				</h1>
			<br>
			<br>
				<div style="background-color: unset;padding-right: 20px;padding-left: 20px ">
				<a href="new_member.php"> <button type = "button" class = "btn btn-info">New Member</button></a>
				 <br>
				 <br>
				 
				 <a href="display_members.php">
				 <button type = "button" class = "btn btn-info">Registered Members</button>
				</a>
				</div>
			</div>
			<div class="col" style="background-color: white">
				<img src="assets/images/homepage_image.png" class="img home_bg_image">
			</div>
			
		</div>
		</div>
	</body>
</html>