<!DOCTYPE html>
<html lang="en-US">
	<?php 
		$title = "Student Pages";
		include "inc/head.php";?>
	<body>
		<?php include "inc/menu.php";?>
		
		<h1>Our Website</h1>
		<div>Meet Kaleb, Sharfuz and Reeshad: the minds behind the San Fran Team!</div>
		
		<a href="kaleb.php">
			<figure>
				<img src="images/kaleb.jpg" alt="Kaleb Chitaphong">
				<figcaption>Kaleb</figcaption>
			</figure>
		</a>


		<a href="reeshad.php">
			<figure>
				<img src="images/reeshad.jpg" alt="Reeshad Rahman">
				<figcaption>Reeshad</figcaption>
			</figure>
		</a>


		<a href="sharfuz.php">
			<figure>
				<img src="images/sharfuz_sifat.jpg" alt="Sharfuz Z Shifat" >
				<figcaption>Sharfuz</figcaption>
			</figure>
		</a>

		<footer>
			<h2>Sources: </h2>
			<a href="http://www.csc174.org/assignment01/kchitap/index.html">Kaleb Chitaphong</a>
			<a href= "http://csc174.org/assignment01/sshifat/Assignment01/index.html">Sharfuz Z Shifat</a>
			<a href="http://csc174.org/assignment01/rrahman/assignment01/start.html">Reeshad Rahman</a>
		</footer>
		<?php include "inc/scripts.php"; ?>
	</body>
</html>