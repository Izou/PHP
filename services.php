<?php
 	$location=$_SERVER['PHP_SELF'];
 	$search=substr($location,22);
 	echo $search;

 	include "init_inc.php";
 	$titre='Services';
 	$rajoutB="class='active'";
?>
 	<?php include "header_inc.php";?>
 	<?php include "nav_inc.php"; ?>


 	<section class='content' id='accueil'>
 		<aside>
 			<ul class='vertical'>
 				<li><a href="services.php?page=1">Service 1</a></li>
 				<li><a href="services.php?page=2">Service 2</a></li>
 				<li><a href="services.php?page=3">Service 3</a></li>
 			</ul>

 			<?php 
 			$page=1;
 			if(isset($_GET['page'])){
 				$page=$_GET['page'];
 			}
 			?>
 		</aside>
 		<article>

 			<?php
 			$services=array();
 			$num1=["Titre 1", "http://lorempixel.com/output/nature-q-g-150-150-5.jpg", "Lorem ipsum..."];
 			$num2=["Titre 2", "http://lorempixel.com/output/city-q-g-150-150-1.jpg", "Lorem ipsum..."];
 			$num3=["Titre 3", "http://lorempixel.com/output/nightlife-q-g-150-150-8.jpg", "Lorem ipsum..."];

 			$services=[$num1,$num2,$num3];
 			?>

 			<h2>
 			<?php echo $services[$page-1][0];?>
 			</h2>

 			<figure>
 			<img src="<?php echo $services[$page-1][1]; ?>">
 			</figure>

 			<p class='right'><?php echo $services[$page-1][2]; ?></p>
 		</article>
 	</section>

 	 <?php include "footer_inc.php"; ?>

<!-- Correction
$cle=0;
if(isset($_GET['lien'])){
	$cle=$$_GET['lien'];

	$a1=($cle==1)
	$a2=
	$a3=
} 	  -->