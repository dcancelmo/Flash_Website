<!DOCTYPE html>
<html lang="en-US">
	<?php 
		$title = "Student Pages";
		include "inc/head.php";?>
	<body>
		<?php include "inc/banner.php";?><!-- This contains an h1 -->
		<?php include "inc/menu.php";?>
		
		<h2>Our Website</h2>
		<div>Meet Kaleb, Sharfuz and Reeshad: the minds behind the San Fran Team!</div>
		
	
		<figure>
			<a href="kaleb.php"><img src="images/kaleb.jpg" alt="Kaleb Chitaphong"></a>
			<figcaption>Kaleb</figcaption>
		</figure>

		
		<figure>
			<a href="reeshad.php"><img src="images/reeshad.jpg" alt="Reeshad Rahman"></a>
			<figcaption>Reeshad</figcaption>
		</figure>

	
		<figure>
			<a href="sharfuz.php"><img src="images/sharfuz_sifat.jpg" alt="Sharfuz Z Shifat"></a>
			<figcaption>Sharfuz</figcaption>
		</figure>
		

		<footer>
			<h3>Sources: </h3>
			<a href="http://www.csc174.org/assignment01/kchitap/index.html">Kaleb Chitaphong</a>
			<a href= "http://csc174.org/assignment01/sshifat/Assignment01/index.html">Sharfuz Z Shifat</a>
			<a href="http://csc174.org/assignment01/rrahman/assignment01/start.html">Reeshad Rahman</a>
		</footer>
		<?php include "inc/scripts.php"; ?>
	</body>
</html>