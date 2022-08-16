<?php
include_once("config.php");

if(isset($_GET["mem_id"]))
{
$mem_id=$_GET["mem_id"];

$sql = "DELETE FROM membership WHERE mem_id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $mem_id));
$dbConn = null;
header("Location:display_members.php");
}
?>