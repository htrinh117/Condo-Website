<?php

echo '
<footer>
	<div class="bgFooter">
		<div class="container-fluid">
			<div class=col-sm-6>
			  <div class="row">
			    <div class="col-sm-6"><img src="icon/home.png">&nbsp <a href="index.html">Home</a></div>
			    <div class="col-sm-6"><img src="icon/phone.png">&nbsp <a href="contact.html">Contact Us</a></div>
			  </div>
			  <div class="row">
			    <div class="col-sm-6"><img src="icon/book.png">&nbsp<a href="reservation.html">Reservation</a></div>
			    <div class="col-sm-6"><img src="icon/members.png">&nbsp <a href="logInPage.html">About Us</a></div>
			  </div>
			  <div class="row">
			    <div class="col-sm-6"><img src="icon/screw-driver.png">&nbsp <a href="dervice.html">Services</a></div>
			    <div class="col-sm-6"></div>
			  </div>
			</div>
			<div class="col-sm-6 footerLogo">
				<img src="icon/Logo.jpg">
				<p>Copy Right 2017 @ 21 Clairtrell Rd | All rights reserved</p>
			</div>
		</div>
	</div>

	
	<script src="js/classie.js"></script>
		<script src="js/clipboard.min.js"></script>
		<script> 

		 $(".menu__item a").click(function(){
        $(this).addClass("active").siblings().removeClass("active");

        // hide logout button initially
		$(document).on("pagebeforeshow", function () {
		  $("#button_logout").toggle();
		});
	</script>
</footer>
'
?>