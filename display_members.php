<?php
include_once("config.php");
$result = $dbConn->query("SELECT * FROM membership ORDER BY id DESC");
// while($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo "<YourHTML>";
//     echo "<YourHTML>".$row['id']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_id']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_firstname']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_lastname']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_othernames']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_gender']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_current_position']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_nia_card_number']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_voter_id']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_digital_address']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_contact_address']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_occupation']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_telephone']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_region_hometown']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_marital_status']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_email_address']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_prosecuted_status']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_reason_for_prosecution']."</YourHTML>";
//     echo "<YourHTML>".$row['mem_passport_photo']."</YourHTML>";
//     echo "<YourHTML>";
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LTPKK | Members</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/b.css">
		<style type="text/css">
			body
			{
				/*background-image: unset;*/
			}
			.main{
				background-color: white;
			}
		*
			{
				border-radius: 0!important
			}
			.form
			{
				width: 50%;
				margin: auto;
				
			}
			input[type=text]
			{
				
				height:60px;
				/*font-s: x-large*/
			}
			label
			{
			display: inline-block;
			font-size: x-large;
			font-weight: 600;
			margin-top: 20px;
			margin-bottom: 5px;
			}
			input[type=radio]
			{
				margin: 10px;
				width: 20px;
				height: 20px
			}
			#prosecution_reason
			{
				display: none
			}
			div h3
			{
				padding-top: 50px
			}
			.a_member
			{
				border:solid 1px;
				margin-top: 5px;
				margin-bottom: 5px;
				cursor: pointer;

			}
			.a_member:hover
			{
				background-color: #9ba3aa
			}
		</style>
	</head>
	<body>
		<div class="container main" style="margin: auto;padding:0">
			<div style="width: 100%;height: 150px;">
				<div class="row">
					<div class="col-2">
						<img src="assets/images/logo.jpg" style="height: 150px;width: ">
					</div>
					<div class="col" style="background-color:#04428d">
						<h1  style="    text-align: center;
						font-size: -webkit-xxx-large;
						color: white;
						margin-left: -50px;
						padding-top: 30px;
						">
						REGISTERED MEMBERS
						</h1>
					</div>
				</div>
			</div>
			<div style="width: 100%">
				<?php
				while($row = $result->fetch(PDO::FETCH_ASSOC)) {
					?>
					<a href="member.php?mem_id=<?php echo $row['mem_id'];?>" style="text-decoration: none;
    color: black;	">
				<div class="a_member container">
					<div class="row">
						<div class="col"></div>
						<div class="col-2"><h3><?php echo $row['id']; ?></h3></div>
						<div class="col-2"><h3><?php echo $row['mem_id']; ?></h3></div>
						<div class="col-2"><h3><?php echo $row['mem_firstname']; ?></h3></div>
						<div class="col"><h3><?php echo $row['mem_othernames']; ?></h3></div>
						<div class="col-2"><h3><?php echo $row['mem_lastname']; ?></h3></div>
						<div class="col-2"><img src="passport_photos/<?php echo $row['mem_passport_photo']; ?>"style="width:100%;"></div>
					</div>
				</div>
			</a>
				<?php
			
				}
				?>
			</div>
			<div style="width: 100%;height: 150px;background-color: #ed3c2a  ">
				<h1  style="    text-align: center;
				font-size: -webkit-xxx-large;
				color: white;
				margin-left: -50px;
				padding-top: 30px;
				">
				&copy; 2022
				</h1>
			</div>
		</div>
	</body>
</html>