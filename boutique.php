<?php
 	include "init_inc.php";
 	$titre='Boutique';
 	$rajoutE="class='active'";
?>
 	<?php include "header_inc.php";?>
 	<?php include "nav_inc.php"; ?>

 	<section class='content' id='accueil'>
 		<aside>
 			<h2>Boutique</h2>
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