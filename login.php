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
                <h1 class="page-header  text-primary">Login
                    <small>Donor</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div>
            <div class="col-md-6">

          <!login form>

							<div id="login">

							        <div class="container">
							            <div id="login-row" class="row justify-content-center align-items-center text-primary">
							                <div id="login-column" class="col-md-6">
							                    <div id="login-box" class="col-md-12">
							                        <form id="login-form" class="form" action="" method="post">
							                            <h3 class="text-center text-primary ">Login</h3>
							                            <div class="form-group">
							                                <label for="username" class="text-primary">Username:</label><br>
							                                <input type="text" name="username" id="username" class="form-control">
							                            </div>
							                            <div class="form-group">
							                                <label for="password" class="text-primary">Password:</label><br>
							                                <input type="text" name="password" id="password" class="form-control">
							                            </div>
							                            <div class="form-group">

							                                <input type="submit" name="submit" class="btn btn-info btn-danger" value="submit">
							                            </div>
							                            <div id="register-link" class="text-right">
							                                <a href="#" class="text-primary">Register here</a>
							                            </div>
							                        </form>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>



   </p>

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
