<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-primary"><i class="fa fa-truck"></i> Delivery Items </h3><hr>

<?php
$sql="SELECT * FROM delivery ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul class="list-group">';
		while($row=$result->fetch_assoc())
		{

				echo '<li class="list-group-item deactive">
						<span>
							<b>   Blood group  	'.$row["D_BGROUP"].' <br> UNIT : '.$row["D_UNIT"].' <br> ADDRESS :'.$row["D_ADDRESS"].'</b>
						</span>
						<span   class="pull-right">


							<a href="admin_delivery_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Deliverd</a>
						</span>

					</li>';


			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Delivery</div>";
}







					?>

		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	</body>
</html>
