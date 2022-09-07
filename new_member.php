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

			/*  */
			
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

/* .menu  */
.menu 
{
	width:100%;
	

}
.menu li {
	float:left;
	padding: 20px 30px;
	list-style-type:none;
	color:white;

	
	
}
.menu li a{
	text-decoration:none;
	cursor:pointer;
	color:white

}

.menu li:hover
{
	background-color:green;
	color:white
}
		</style>
	</head>
	<body>
		<div class="container main" style="margin: auto;padding:0">
			<div style="width: 100%;height: 150px;padding:0">
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
			
			<div style="width: 100%;height:65px;padding:0;	background-color:#04428d;margin-top:0">
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a  href="new_member.php">New Member</a></li>
			<li><a  href="display_members.php">Registered Members</a></li>

		</ul>
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
					<div class='form-group' style="display:inline-block;position:relative;width:100%">
						<label for='MemConstituency'>Constituency</label>
<input select name='MemConstituency' id='MemConstituency' class='form-control' type='text' required > 
			
						<!-- <select name='MemConstituency' id='MemConstituency' class='form-control' type='text' required >
							<option></option>
						</select> -->
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

	<script type="text/javascript">
let o= document.getElementById('MemConstituency');
const s =[ "Adansi-Asokwa", "Fomena", "New Edubease", "Kwabre West", "Ahafo Ano North", "Ahafo Ano South", "Ahafo Ano South East", "Ahafo Ano South West", "Odotobori", "Aminsie West", "Manso Nkwanta", "Manso Edubia", "Asante-Akim North", "Asante-Akim Central", "Asante-Akim North", "Asante-Akim South", "Atwima-Mponua", "Atwima-Nwabiagya", "Atwima-Nwabiagya North", "Atwima-Nwabiagya South", "Bekwa", "Bosome-Ferho", "Bosomtwe", "Ejisu", "Juaben", "Ejura-Sekyedumase", "Asokwa", "Mampong", "Asokwa", "Bantama", "Nhyiaeso", "Oforikrom", "Old Tafo", "Suame", "Subin", "Manhyia Manhyia North", "Manhyia South", "Kwadaso", "Kwabre East", "Akrofuom", "Obuasi", "Obuasi East", "Obuasi West", "Ofinso North", "Ofinso South", "Kumawu", "Sekyere Afram plains", "Nsuta-Kwamang", "Afigya Sekyere West", "Afigya Sekyere East", "Effiduase-Asokore", , "Asunafo North", "Asunafo North", "Atebubu-Amantin", "Banda", "Berekum", "Berekum East", "Berekum West", "Dormaa East", "Dormaa West", "Dormaa West", "Dormaa Central", "Jaman North District", "Jaman North", "Jaman South", "Kintampo North", "Kintampo South", "Nkoranza North", "Nkoranza South", "Pru", "Pru East", "Pru West", "Sene", "Sene East", "Sene West", "Sunyani East", "Sunyani West", "Tain", "Banda", "Tano North", "Tano South", "Techiman North", "Techiman South", "Wenchi", , , "Akropong", "Akuapem North", "Okere", "Aburi-Nsawam", "Akwapim South", "Nsawam Adoagyiri", "Ofoase-Ayirebi", "Asuogyaman", "Atiwa", "Atiwa East", "Atiwa West", "Akim Oda", "Asene Akroso-Manso", "Abirem", "Akim Swedru", "Achiase", "Akim Abuakwa North", "Akim Abuakwa South", "Fanteakwa", "Fanteakwa North", "Fanteakwa South", "Akwatia", "Kade", "Abetifi", "Afram Plains North", "Afram Plains South", "Mpraeso", "Nkawkaw", "Lower Manya", "New Juaben North", "New Juaben South", "Ayensuano", "Suhum", "Upper Manya", "Lower West Akim", "Upper West Akim", "Yilo Krobo", , , , "Abura-Asebu-Kwamankese", "Agona East", "Agona West", "Ajumako-Enyan-Essiam", "Asikuma-Odoben-Brakwa", "Assin North", "Assin North", "Assin Central", "Assin South", "Awutu-Senya", "Awutu-Senya East", "Awutu-Senya West", "Cape Coast", "Cape Coast North", "Cape Coast South", "Effutu", "Gomoa East", "Gomoa Central", "Gomoa West", "Komenda-Edina-Eguafo-Abirem", "Mfantseman East", "Mfantseman West", "Hemang Lower Denkyira", "Twifo-Atii Morkwaa", "Upper Denkyira East", "Upper Denkyira West", , , "Akropong", "Akuapem North", "Okere", "Aburi-Nsawam", "Akwapim South", "Nsawam Adoagyiri", "Ofoase-Ayirebi", "Asuogyaman", "Atiwa", "Atiwa East", "Atiwa West", "Akim Oda", "Asene Akroso-Manso", "Abirem", "Akim Swedru", "Achiase", "Akim Abuakwa North", "Akim Abuakwa South", "Fanteakwa", "Fanteakwa North", "Fanteakwa South", "Akwatia", "Kade", "Abetifi", "Afram Plains North", "Afram Plains South", "Mpraeso", "Nkawkaw", "Lower Manya", "New Juaben North", "New Juaben South", "Ayensuano", "Suhum", "Upper Manya", "Lower West Akim", "Upper West Akim", "Yilo Krobo", , , "Ablekuma Central", "Ablekuma North", "Ablekuma South", "Ablekuma West", "Ayawaso Central", "Ayawaso East", "Ayawaso East", "Ayawaso North", "Ayawaso West Wuogon", "Dade Kotopon", "Domeabra-Obom", "Korle Klottey", "Odododiodoo", "Okaikwei North", "Okaikwei Central", "Okaikwei South", "Adenta", "Ashaiman", "Ada", "Sege", "Ningo-Prampram", "Abokobi-Madina", "Dome-Kwabenya", "Trobu-Amasaman", "Trobu", "Amasaman", "Weija", "Weija-Gbawe", "Bortianor-Ngleshie-Amanfrom", "Anyaa-Sowutuom", "Krowor", "Ledzokuku", "Kpone-Katamanso", "Shai-Osudoku", "Tema East", "Tema Central", "Tema West", , , "Bole", "Bunkpurugu-Yunyoo", "Bunkpurugu", "Yunyoo", "Yapei-Kusawgu", "Chereponi", "Salaga", "Salaga North", "Salaga South", "Nalerigu", "Gushegu", "Karaga", "Kpandai", "Bimbilla", "Wulensi", "Saboba", "Nanton", "Savelugu", "Sawla-Tuna-Kalba", "Tamale Central", "Tamale North", "Tamale North", "Sagnarigu", "Tamale South", "Tolon", "Kumbungu", "Damango-Daboya", "Damango", "Daboya-Mankarigu", "Walewale", "Yagaba-Kubori", "Mion", "Yendi", "Zabzugu-Tatale", "Zabzugu", "Tatale-Sanguli", , , "Bawku Central", "Binduri", "Pusiga", "Zebilla", "Bolgatanga", "Bolgatanga Central", "Bolgatanga East", "Bongo", "Builsa North", "Builsa South", "Garu-Tempane", "Garu", "Tempane", "Chiana-Paga", "Navrongo Central", "Nabdam", "Talensi", , , "Jirapa", "Lambussie", "Lawra-Nandom", "Lawra", "Nandom", "Nadowli East", "Nadowli West", "Sissala East", "Sissala West", "Wa East", "Wa Central", "Wa West", , , "Adaklu", "Afadjato South", "Agotime-Ziope", "Akatsi North", "Akatsi South", "Biakoye", "Ho Central", "Ho West", "Hohoe South", "Buem", "Akan", "Anlo", "Keta", "Ketu North", "Ketu South", "Kpando", "Krachi East", "Krachi West", "Krachi Nchumuru", "Nkwanta North", "Nkwanta South", "Central Tongu", "North Tongu", "North Dayi", "South Dayi", "South Tongu", , , "Amenfi Central", "Amenfi East", "Ahanta West", "Aowin", "Suaman", "Bia", "Bia East", "Bia West", "Bibiani-Anhwiaso-Bekwai", "Ellembelle", "Jomoro", "Juabeso", "Bodi", "Mpohor-Wassa East", "Mpohor", "Wassa East", "Evalue-Gwira", "Prestea-Huni Valley", "Sefwi-Akontombra", "Sefwi Wiawso", "Effia-Kwesimintsim", "Effia", "Kwesimintsim", "Essikado-Ketan", "Sekondi", "Takoradi", "Shama", "Tarkwa-Nsuaem", "Amenfi East", "Amenfi West"];

for (var i = s.length - 1; i >= 0; i--) {
	let d = o.innerHTML
	let g = d + "<option value='"+s[i]+"'>"+s[i]+"</option>";
	o.innerHTML=g;
//	console.log(g);
}



</script>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("MemConstituency"), countries);
</script>

</html>