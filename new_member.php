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
			input[type=text],input[type=number]
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
						<a href="index.php"><img src="assets/images/logo.jpg" style="height: 150px; ">
					</a></div>
					<div class="col" style="background-color:#ed3c2a">
						<h1  style="    text-align: center;
						font-size: -webkit-xxx-large;
						color: white;
						margin-left: -50px;
						padding-top: 30px;
						">
						REGISTER NEW MEMBER
						</h1>
					</div>
				</div>
			</div>
			<form method='POST' role='form' action="register.php"  enctype="multipart/form-data">
				<div class="form">
					<!--    <div class='form-group'>
										<label for='in_Id'>Id</label>
										<input name='in_Id' id='in_Id' class='form-control' type='text' >
					</div> -->
					<!--   <div class='form-group'>
										<label for='in_MemId'>Mem Id</label>
										<input name='in_MemId' id='in_MemId' class='form-control' type='text' placeholder='Membership ID '>
					</div> -->
					<div class='form-group'>
						<label for='firstname'>First Name</label>
						<input name='firstname' id='firstname' class='form-control' type='text'
						required >
					</div>
					<div class='form-group'>
						<label for='lastname'>Last Name</label>
						<input name='lastname' id='lastname' class='form-control' type='text'  required >
					</div>
					<div class='form-group'>
						<label for='othernames'>Othernames <span style="font-size: unset;font-weight: normal;"><em>(optional)</em></span></label>
						<input name='othernames' id='othernames' class='form-control' type='text' >
					</div>
					<div class='form-group'>
						<label for='age'>Age</label>
						<input name='age' id='age' class='form-control' type='Number' >
					</div>
					<div class='form-group'>
						<label for='gender'>Gender</label>
						<fieldset style="    border: 1px solid darkgrey;
							padding: 20px;
							">
							<div id='gender' class='radio'>
								<label style="height: unset;margin:0;font-weight: normal;"><input type='radio' name='gender' value='female'>Female</label>
							</div>
							<div id='gender' class='radio'>
								<label style="height: unset;margin:0;font-weight: normal;"><input type='radio' name='gender' value='male'>Male</label>
							</div>
						</fieldset>
						
						
					</div>
					<div class='form-group'>
						<label for='CurrentPosition'>Current Position</label>
						<input name='CurrentPosition' id='CurrentPosition' class='form-control' type='text'>
						
					</div>
					<div class='form-group'>
						<label for='nia_card_number'>NIA Card Number</label>
						<input name='nia_card_number' id='nia_card_number' class='form-control' type='text'>
					</div>
					<div class='form-group'>
						<label for='memvoterId'>Voter ID Number</label>
						<input name='memvoterId' id='memvoterId' class='form-control' type='text' required >
					</div>
					<div class='form-group'>
						<label for='memdigitaladdress'>Digital Address</label>
						<input name='memdigitaladdress' id='memdigitaladdress' class='form-control' type='text' required >
					</div>
					<div class='form-group'>
						<label for='ContactAddress'>Contact Address</label>
						<input name='ContactAddress' id='ContactAddress' class='form-control' type='text' required >
						
					</div>
					<div class='form-group'>
						<label for='MemOccupation'>Occupation</label>
						<input name='MemOccupation' id='MemOccupation' class='form-control' type='text' required >
					</div>
					<div class='form-group'>
						<label for='MemTelephone'>Telephone</label>
						<input name='MemTelephone' id='MemTelephone' class='form-control' type='text'  required >
					</div>
					<div class='form-group'>
						<label for='MemRegionHometown'>Region / Hometown</label>
						<input name='MemRegionHometown' id='MemRegionHometown' class='form-control' type='text' required >
					</div>
					<div class='form-group'>
						<label for='MemMaritalStatus'>Marital Status</label>
						<input name='MemMaritalStatus' id='MemMaritalStatus' class='form-control' type='text' required >
					</div>
					<div class='form-group'>
						<label for='MemEmailAddress'>Email Address</label>
						<input name='MemEmailAddress' id='MemEmailAddress' class='form-control' type='text'  required >
					</div>
					<div class='form-group'>
						<label for='MemProsecutedStatus'>Have you ever been prosecuted before?</label>
						<fieldset style="    border: 1px solid darkgrey;
							padding: 20px;
							">
							<div id='MemProsecutedStatus' class='radio'>
								<label style="height: unset;margin:0;font-weight: normal;"><input type='radio' name='MemProsecutedStatus' value='no' checked>No</label>
							</div>
							<div id='MemProsecutedStatus' class='radio'>
								<label style="height: unset;margin:0;font-weight: normal;"><input type='radio' name='MemProsecutedStatus' value='yes'>Yes</label>
							</div>
						</fieldset>
					</div>
					<div class='form-group' id="prosecution_reason">
						<label for='MemReasonForProsecution'>Reason For Prosecution</label>
						<textarea name='MemReasonForProsecution' id='MemReasonForProsecution' class='form-control' type='text' rows="10"></textarea>
					</div>
					<br>
					<div class='form-group'>
						<img id="passport" src="assets/images/passport_placehold.png" style="width: 200px;height: 200px" />
						<br>
						<label for='MemProfilePic'>Passport Photo</label>
						<input name='MemProfilePic' id='MemProfilePic' class='form-control' type='file' onchange="readURL(this);" >
					</div>
							<div class='form-group'>
						<label for='executive_remarks'>Executive Remarks</label>
						<textarea name='executive_remarks' id='executive_remarks' class='form-control' type='text' rows="10"></textarea>
					</div>
					<br>
					<br>
					<br>
					<button type = "submit" class = "btn btn-success" style="margin-bottom: 30px;width: 100%;height: 70px">Registered Members</button>
				</div>
			</form>
			<div style="width: 100%;height: 150px;background-color:  #04428d">
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script type="text/javascript">
			const MemProsecutedStatus = document.querySelectorAll('input[name="MemProsecutedStatus"]');
	for(const ProsecutedStatus of MemProsecutedStatus){
	ProsecutedStatus.addEventListener('change', showSelected);
	}
	
	function showSelected(e) {
	
	if (this.checked) {
	// alert(this.value)
	if(this.value == "yes")
	{
	document.querySelector("#MemReasonForProsecution").innerText="";
	document.querySelector("#prosecution_reason").style.display="block";
	}
	else
	{
	document.querySelector("#MemReasonForProsecution").innerText="no_value";
	document.querySelector("#prosecution_reason").style.display="none"
	}
	}
	}
		
	function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();
	reader.onload = function (e) {
	$('#passport')
	.attr('src', e.target.result)
	.width(200)
	.height(200);
	};
	reader.readAsDataURL(input.files[0]);
	}
	}
		
	</script>
</html>