<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>

    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">
  <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header  text-primary">Blood
                    <small>Delivery</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Stock</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
							<form  method='post'>
								<div class="form-group text-primary" >
				          <h4>Select blood group</h4>
				          <select class="form-control form-control-sm" name="select_group" >
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
									<select class="form-control form-control-sm" name="select_unit" >
				              <option>1</option>
				              <option>2</option>
				              <option>3</option>
				              <option>4</option>
											<option>5</option>

				         </select>
								 <h4>Delivery Adress </h4>
								 <textarea rows="5" cols="100" class="form-control" name="D_adress" required maxlength="999" style="resize:none"></textarea>

								 </address>

				          <button type="submit" style="margin-top: 25px" class="btn btn-primary">Order</button>
								</div>
							</form>
            </div>
						<! Receipt details>
            <div class="col-md-6">
							<?php
								if (isset($_POST["select_group"])&&isset($_POST["select_unit"])){
                echo'<h2 class="text-primary">Invoice</h2>
								<hr>

								<div class="container" style=" width: 100%; ">


																						<div class="row">
																							<div  >
																								<div >
																									<div class="panel-heading">
																										<h3 class="panel-title"><strong  style="color:white;">Order summary</strong></h3>
																									</div>
																									<div class="panel-body">
																										<div class="table-responsive">
																											<table class="table table-condensed">
																												<thead>
																																				<tr>
																															<td ><strong>Blood Group</strong></td>
																															<td class="text-center" ><strong>Price</strong></td>
																															<td class="text-center"><strong>Unit</strong></td>
																															<td class="text-center"><strong>Totals</strong></td>
																																				</tr>
																												</thead>';






																												echo "<tbody>



																														<tr>";


																												 		echo"<td>".$_POST["select_group"]."</td>";
																												  	echo'<td class="text-center">$600.00</td>';
																														echo'<td class="text-center">'.$_POST["select_unit"].'</td>';
																														echo'<td class="text-center" >$600.00</td>
																													</tr>
																													<tr>
																														<td class="thick-line"></td>
																														<td class="thick-line"></td>
																														<td class="thick-line text-center"><strong>Subtotal</strong></td>
																														<td class="thick-line text-center ">$670.99</td>
																													</tr>
																													<tr>
																														<td class="no-line"></td>
																														<td class="no-line"></td>
																														<td class="no-line text-center"><strong>Delivery</strong></td>
																														<td class="no-line text-center">$15</td>
																													</tr>
																													<tr>
																														<td class="no-line"></td>
																														<td class="no-line"></td>
																														<td class="no-line text-center"><strong>Total</strong></td>
																														<td class="no-line text-center">$685.99</td>
																													</tr>



																												</tbody> ';}

																											/* ADDING DATA TO DATABASE */

																											if (isset($_POST["select_group"])&&($_POST["select_unit"])&&($_POST["D_adress"]))
																											{
																												$sql= "SELECT * FROM delivery WHERE ID=(SELECT MAX(ID) FROM delivery)";
																												$result = mysqli_query($con, $sql);


																												$row = mysqli_fetch_assoc($result);
																												$new_ID = $row['ID'] + 1;
																												$sql = " INSERT INTO delivery (ID, D_BGROUP, D_UNIT, D_ADDRESS)
        																								VALUES ('$new_ID','$_POST[select_group]','$_POST[select_unit]','$_POST[D_adress]')";

																																if ($con->query($sql) === TRUE) {
																														    echo " ";
																														} else {
																														    echo "Error: " . $sql . "<br>" . $con->error;
																														}

																											}





																												  ?>


																											</table>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						</div>


            </div>
        </div>
        <!-- /.row -->


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
