<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link href="style_menus-formulaire.css" media="all" rel="stylesheet" type="text/css" />

  <title>Menu PHP</title>
 </head>
 <body>

 	<div id='ct'>
 	<header></header> -->
 	<?php
 	include "init_inc.php";
 	$titre='Accueil';
 	$rajoutA="class='active'";
 	?>
 	<?php include "header_inc.php";?>
<!--   	<nav>
 		<ul>
 			<li><a href="#" class='active'>Accueil</a></li>
 			<li><a href="#">Services</a></li>
 			<li><a href="#">Contact</a></li>
 			<li><a href="#">Inscription</a></li>
 		</ul>
 	</nav> -->

 	<?php include "nav_inc.php"; ?>

 	<section class='content' id='accueil'>
 		<aside>
 			<h2>Connexion</h2>
 			<label>Pseudo :</label>
 			<input type='text' name='nom' id='nom' size='20' maxlength='' placeholder='8 à 16 caractères'>
 			<label>Login :</label>
 			<input type='text' name='nom' id='nom' size='20' maxlength='' placeholder='8 à 16 caractères'>
 			<input type='submit'name='validation' id='validation' value='OK'>
 			<a href="#">S'inscrire</a>
 		</aside>
 		<article>
 			<p>article accueil</p>
 		</article>
 	</section>

 	 <?php include "footer_inc.php"; ?>
<!--  	<footer>
 		<p>Mon footer</p>
 	</footer>
	</div>
 </body>
 </html> -->