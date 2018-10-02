<?php
session_start();
include("config.php");
include("admin_function.php");
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

			<h3 class="text-primary"><i class="fa fa-shopping-cart fa-l"></i>  Stock Details</h3><hr>
<div class="col-md-6 col-md-offset-3">

			<form  method='post'>
				<div class="form-group text-primary" >
          <h4>Select blood group</h4>
          <select class="form-control form-control-sm" name="myselectbox" >
              <option>O-positive</option>
              <option>O-negative</option>
              <option>A-positive</option>
              <option>A-negative</option>
              <option>B-positive</option>
              <option>B-negative</option>
              <option>AB-positive</option>
              <option>AB-negative</option>
          </select>
          <h4>Enter unit</h4>
          <input class="form-control form-control-sm" type="text" name="unit" placeholder="Enter Unit">
          <button type="submit" style="margin-top: 25px" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>

<!TO PERFORM UNIT ADDING TO DATABASE>

		<div class='col-md-12'>
      <?php
      if (isset($_POST["myselectbox"])&&($_POST["unit"])){
                if($_POST['myselectbox']=='O-positive'){
                          $sql="Select * from stock WHERE ID = 1 ";
                          $result = mysqli_query($con, $sql);

                          if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_assoc($result);
                          $new_unit = $row['UNIT']+$_POST["unit"];
                          $sql = "UPDATE stock SET UNIT = $new_unit WHERE ID = 1";

                                                    if (mysqli_query($con, $sql)) {
                                    echo "New record created successfully";
                                    } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                    }

                          } else {
                          echo "0 results";
                          }

                }

                if($_POST['myselectbox']=='O-negative'){
                          $sql="Select * from stock WHERE ID =2 ";
                          $result = mysqli_query($con, $sql);

                          if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_assoc($result);
                          $new_unit = $row['UNIT']+$_POST["unit"];
                          $sql = "UPDATE stock SET UNIT = $new_unit WHERE ID = 2";

                                                    if (mysqli_query($con, $sql)) {
                                    echo "New record created successfully";
                                    } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                    }

                          } else {
                          echo "0 results";
                          }

                }
        }

      ?>
			<div class='table-responsive' id="feedback">

			<?php
        echo "<table class='table'>";
        echo "<tr> <th>ID</th> <th>Blood Group</th> <th>Unit</th></tr>";
				  $sql="Select * from stock";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['B_GROUP'] . "</td><td>". $row['UNIT'] ."</td></tr>";
          }
          } else {
          echo "0 results";
          }

          echo "</table>";
			?>
			</div>
		</div>
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	  <script>


  </script>

	</body>
</html>
