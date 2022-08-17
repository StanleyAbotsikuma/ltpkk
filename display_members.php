<?php
include_once("config.php");
// $result = $dbConn->query("SELECT * FROM membership ORDER BY id DESC");
$result = "";
if($_POST){
$cat = $_POST["cat"];
	$search = $_POST["search"];
	switch ($cat) {
		case 'occupation':
			$result = $dbConn->prepare("SELECT * FROM membership where mem_occupation=:search ORDER BY id DESC");
			$result->execute(['search' => $search]);
			break;
			case 'age':

			$s = $search;
			$so = explode(" ",$s)[0];
			



			if ( $so == ">") {
			$sn = explode(" ",$s)[1];
				$result = $dbConn->prepare("SELECT * FROM membership where mem_age >:search ORDER BY id DESC");
			$result->execute(['search' => $sn]);
				# code...
			} 

			elseif ($so == "<") {
				$sn = explode(" ",$s)[1];
				$result = $dbConn->prepare("SELECT * FROM membership where mem_age <:search ORDER BY id DESC");
			$result->execute(['search' => $sn]);
			}
			elseif ($so == "<=") {
				$sn = explode(" ",$s)[1];
				$result = $dbConn->prepare("SELECT * FROM membership where mem_age <=:search ORDER BY id DESC");
			$result->execute(['search' => $sn]);
			}
			elseif ($so == ">=") {
				$sn = explode(" ",$s)[1];
				$result = $dbConn->prepare("SELECT * FROM membership where mem_age >=:search ORDER BY id DESC");
			$result->execute(['search' => $sn]);
			}
			else
			{
				$so = explode(" ",$s)[0];
			$result = $dbConn->prepare("SELECT * FROM membership where mem_age =:search ORDER BY id DESC");
			$result->execute(['search' => $so]);	
			}
			
			break;
		
		default:
			
			break;
	}
}
else
{
$result = $dbConn->query("SELECT * FROM membership ORDER BY id DESC");
}
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
			option
			{
				padding:10px;box-sizing: border-box;text-align: center;
			}
			td
			{
				width: 200px;
				text-align: center;
				border-left: solid 1px rgb(232, 232, 232);

			}
			td h3{
				padding-top: 60px
			}
		</style>
	</head>
	<body>
		<div class="container main" style="margin: auto;padding:0">
			<div style="width: 100%;height: 150px;">
				<div class="row">
					<div class="col-2">
						<a href="index.php"><img src="assets/images/logo.jpg" style="height: 150px; ">
						</a></div>
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
				
				<div class="container-fiuld" style="padding: 0;margin-top:5px;background-color:#00000024">
					<form  method="POST" action="">
						<div class="row " style="padding: 20px;margin:0;box-sizing: border-box;">
							<div class="col-md-3">
								<select name="cat" id="select" required style="width: 100%;height: 100%">
									<option value=""  >- - -</option>
									<option value="occupation" >Occupation</option>
									<option value="age" >Age</option>
									
								</select>
								
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="search" required>
								
							</div>
							<div class="col-md-3">
								<button type="submit" class="btn btn-secondary btn-block" style="width: 100%;height: 100%;background-color: white;color: #04428d">Search Results</button>
								
							</div>
							
						</div>
						
						
					</form>
				</div>
				
				<br>
				<br>
				
				<div style="width: 100%;margin: auto;">
					<table class="table table-striped">
						<tbody>
					<?php
					while($row = $result->fetch(PDO::FETCH_ASSOC)) {
					?>

					<tr>
<!-- 
					<a href="member.php?mem_id=<?php echo $row['mem_id'];?>" style="text-decoration: none;
						color: black;	"> -->
						<!-- <div class="a_member container"> -->
							<!-- <div class="row"> -->
								<!-- <div class="col"></div> -->
								<td><h3><?php echo $row['id']; ?></h3></td>
								<td><h3><?php echo $row['mem_id']; ?></h3></td>
								<td><h3><?php echo $row['mem_firstname']; ?></h3></td>
								<td><h3><?php echo $row['mem_lastname']; ?></h3></td>
								<td><h3><?php echo $row['mem_telephone']; ?></h3></td>
								<td><img src="passport_photos/<?php echo $row['mem_passport_photo']; ?>"style="width:200px;height: 200px"></td>

								<td>
									<a href="member.php?mem_id=<?php echo $row['mem_id'];?>" ><button class = "btn btn-success" style="margin-top: 60px;height: 50px">View</button>
								</a>
								 </td>
							<!-- </div> -->
						<!-- </div> -->
					<!-- </a> -->
				<!-- </tr> -->
					<?php
					
					}
					?>
				</tbody>
					</table>
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