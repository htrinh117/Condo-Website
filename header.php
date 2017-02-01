<?php
//      session_start(); 
		echo '
	<body>
		<header>
			<div class="container">
				<section class="section section--menu" id="Viola">
					<nav class="menu menu--viola">
						<ul class="menu__list">
							<li class=""><a href="index.php"><img src="icon/Logo.jpg" style="margin-top:-10px;height:55px; width: 230px;"></a></li>
							<li class="menu__item">
								<a href="index.html">Home</a>
								<a href="#">Reservation</a>
								<a href="#">Service</a>
								<a href="about.html">About</a>
								<a href="contact.html">Contact</a></li>';
	                        if(isSet($_SESSION['userSession'])){
	                    echo "<li><p>Welcome ".$_SESSION['firstname']."&nbsp&nbsp</p></li>";
	//                    echo $_SESSION['lastname'];      
	//                     echo $_SESSION['role'];   
	                    echo  '<li class="logout"><a class="loginBtn" id="button_logout" href="logout.php">Logout</a></li>';}
	                    else{
	                    echo '<li class="login"><a class="loginBtn" id="button_login" href="logInPage.html">Login</a></li>';}

	echo
	'
						</ul>
					</nav>
				</section>
			</div>
		</header>
		
		';
		?>