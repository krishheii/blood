<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="fill" style="background-image:url('images/s1.jpg');">


        </div>

        <!-- Controls -->

    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->

        <!-- /.row -->

        <!-- Portfolio Section -->

        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need to sell blood ?</h2>
            </div>
            <div class="col-md-6">


			<ul>
				<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

				<li>Many people would not be alive today if donors had not generously given their blood.</li>

				<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>

				<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li>Most people between the ages of 17-65 are able to give blood.</li>

				<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Browse Open 24/7 Delivery by Hospitals</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="delivery.php"><i class="fa fa-shopping-cart fa-l"></i> Buy From Stock</a>
                </div>
            </div>
        </div>

		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
