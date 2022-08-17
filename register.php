<?php

if($_POST)
{
include("config.php");
include("upload_passport.php");


 
function _generateRandomString() {
    $chars = array_merge(range(0, 9));
    shuffle($chars);
    return implode(array_slice($chars, 0,25));
}

  
$string = _generateRandomString();



$mem_id = "mem-".$string;
$mem_firstname = $_POST['firstname'];
$mem_lastname = $_POST['lastname'];
$mem_othernames = $_POST['othernames'];
$mem_age = $_POST['age'];
$mem_gender = $_POST['gender'];
$mem_current_position = $_POST['CurrentPosition'];
$mem_nia_card_number = $_POST['nia_card_number'];
$mem_voter_id = $_POST['memvoterId'];
$mem_digital_address = $_POST['memdigitaladdress'];
$mem_contact_address = $_POST['ContactAddress'];
$mem_occupation = $_POST['MemOccupation'];
$mem_telephone = $_POST['MemTelephone'];
$mem_region_hometown = $_POST['MemRegionHometown'];
$mem_marital_status = $_POST['MemMaritalStatus'];
$mem_email_address = $_POST['MemEmailAddress'];
$mem_prosecuted_status = $_POST['MemProsecutedStatus'];
$mem_reason_for_prosecution = $_POST['MemReasonForProsecution'];
$mem_executive_remarks = $_POST['executive_remarks'];

$mem_profile_pic = strval(upload_image());
$mem_date_registered=date("Y-m-d H:i:s");
// echo $mem_profile_pic;
$sql = "INSERT INTO membership (`id`, `mem_id`, `mem_firstname`, `mem_lastname`, `mem_othernames`, `mem_age`, `mem_gender`, `mem_current_position`, `mem_nia_card_number`, `mem_voter_id`, `mem_digital_address`, `mem_contact_address`, `mem_occupation`, `mem_telephone`, `mem_region_hometown`, `mem_marital_status`, `mem_email_address`, `mem_prosecuted_status`, `mem_reason_for_prosecution`, `mem_passport_photo`, `mem_date_registered`, `mem_executive_remarks`) VALUES (null,:mem_id,:mem_firstname,:mem_lastname,:mem_othernames,:mem_age,:mem_gender,:mem_current_position,:mem_nia_card_number,:mem_voter_id,:mem_digital_address,:mem_contact_address,:mem_occupation,:mem_telephone,:mem_region_hometown,:mem_marital_status,:mem_email_address,:mem_prosecuted_status,:mem_reason_for_prosecution,:mem_profile_pic,:mem_date_registered,:mem_executive_remarks)";
$query = $dbConn->prepare($sql);

$query->bindparam(':mem_id', $mem_id);
$query->bindparam(':mem_firstname', $mem_firstname);
$query->bindparam(':mem_lastname', $mem_lastname);
$query->bindparam(':mem_othernames', $mem_othernames);
$query->bindparam(':mem_age', $mem_age);
$query->bindparam(':mem_gender', $mem_gender);
$query->bindparam(':mem_current_position', $mem_current_position);
$query->bindparam(':mem_nia_card_number', $mem_nia_card_number);
$query->bindparam(':mem_voter_id', $mem_voter_id);
$query->bindparam(':mem_digital_address', $mem_digital_address);
$query->bindparam(':mem_contact_address', $mem_contact_address);
$query->bindparam(':mem_occupation', $mem_occupation);
$query->bindparam(':mem_telephone', $mem_telephone);
$query->bindparam(':mem_region_hometown', $mem_region_hometown);
$query->bindparam(':mem_marital_status', $mem_marital_status);
$query->bindparam(':mem_email_address', $mem_email_address);
$query->bindparam(':mem_prosecuted_status', $mem_prosecuted_status);
$query->bindparam(':mem_reason_for_prosecution', $mem_reason_for_prosecution);
$query->bindparam(':mem_profile_pic', $mem_profile_pic);
$query->bindparam(':mem_date_registered', $mem_date_registered);
$query->bindparam(':mem_executive_remarks', $mem_executive_remarks);
$query->execute();
$dbConn = null;

header("Location:display_members.php?d=registered&mem_id=".$mem_id);





}
else
{
echo "what the f";
}

?>