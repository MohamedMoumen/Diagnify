<?php

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmaill.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by Zerotheme.com" />
    <meta name="author" content="www.Zerotheme.com" />
	<title>Health Care | Zerotheme.com</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Top -->
	<?php include 'header.php';?>

		
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article class="box-shadow">
						<div class="heading">
							<h2>
								<span class="hr">Contact</span>
							</h2>
						</div>
						<div class="row">
							<div class='embed-container maps'>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1055.1342482101709!2d31.16924493881701!3d27.186654716183426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1445095836b3c115%3A0x1bcb6c5d25f98007!2sAssiut%20University%2C%20Faculty%20of%20Computers%20and%20Information!5e0!3m2!1sen!2seg!4v1625517335956!5m2!1sen!2seg" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
							</div>
							<div class="col-md-4 box-item">
								<h3>Contact Info</h3>
								<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
								<p>JL.Kemacetan timur no.23. block.Q3<br>
									Jakarta-Indonesia</p>
								   <p>+2 0	88 888 90 <br>
									+2 088 88891</p>
								<p>info@diagnify.com</p>
							</div>
							<div class="col-md-8">
								<h3>Contact Form</h3>
								<form name="form1" method="post" action="contact.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message" style="height: 190px;"></textarea>
											</div>						
											<button type="submit" class="btn btn-red btn-block" name="submitcontact" id="submitcontact">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		
	</div>

	<?php include 'footer.php';?>

	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>
	
