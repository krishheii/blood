<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM delivery WHERE ID=$id";
	 $con->query($sql);
	 header("location:admin_delivery.php?mes=Message Deleted");
 }
 else
 {
	 header("location:admin_delivery.php");
 }

?>
