<?php
include_once("config.php");

if(isset($_GET["mem_id"]))
{
$mem_id=$_GET["mem_id"];

$result = $dbConn->prepare("SELECT * FROM membership WHERE mem_id = ? ");
$result->execute([$mem_id]);
$memberRow = $result->fetch();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>LTPKK | New Member</title>
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
						<?php echo $mem_id; ?>
						</h1>
					</div>
				</div>
			</div>


			<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="passport_photos/<?php echo $memberRow['mem_passport_photo']; ?>"><?php echo $memberRow['mem_lastname']; ?></span><span class="text-black-50"><?php echo $memberRow['mem_email_address']; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Detail Information</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4"><label class="labels">First name</label><input type="text" value="<?php echo $memberRow['mem_firstname']; ?>" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-4"><label class="labels">Last name</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_lastname']; ?>" placeholder="surname"></div>
                    <div class="col-md-4"><label class="labels">Othernames</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_othernames']; ?>" placeholder="othernames"></div>

                      <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="enter gender" value="<?php echo $memberRow['mem_gender']; ?>"></div>
                          <div class="col-md-12"><label class="labels">Marital Status</label><input type="text" class="form-control"  value="<?php echo $memberRow['mem_marital_status']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $memberRow['mem_telephone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">NIA ID-Card Number</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_nia_card_number']; ?>"></div>
                      <div class="col-md-12"><label class="labels">Voter's ID Number</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_voter_id']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_contact_address']; ?>"></div>
                     <div class="col-md-12"><label class="labels">Region/ H-Town</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_region_hometown']; ?>"></div>
                   
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" value="<?php echo $memberRow['mem_email_address']; ?>"></div>
                  
                </div>
            
                <div class="mt-5 text-center">
<a href="delete_member.php?mem_id=<?php echo $memberRow['mem_id'];?>" style="text-decoration: none;
    color: black;	">
                	<button class="btn btn-danger profile-button" type="button">Delete</button>
                </a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
             <!--    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br> -->
               <div class="col-md-12"><label class="labels">Occupation</label><input type="text" class="form-control" value="<?php echo $memberRow['mem_occupation']; ?>"></div> <br>
                <div class="col-md-12"><label class="labels">Current Position</label><input type="text" class="form-control"  value="<?php echo $memberRow['mem_current_position']; ?>"></div> <br>
                <div class="col-md-12"><label class="labels">Have you ever been prosecuted?</label><input type="text" class="form-control"  value="<?php echo $memberRow['mem_prosecuted_status']; ?>"></div>
                 <br>
                <div class="col-md-12"><label class="labels">if yes, reason?</label><textarea type="text" class="form-control" rows="15">
                	<?php echo $memberRow['mem_reason_for_prosecution']; ?>
                </textarea></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
		</div>

	</body>
</html>


<?php

}
else
{

header("Location:display_members.php");


}

	

?>
