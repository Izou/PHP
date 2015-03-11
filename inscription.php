<?php
 	include "init_inc.php";
 	$titre='Inscription';
 	$rajoutD="class='active'";
?>
 	<?php include "header_inc.php";?>
 	<?php include "nav_inc.php"; ?>

 	<section class='content' id='accueil'>
 		<aside>
 			<p>aside</p>
 		</aside>
 		<article>
 			 <h2>Inscription</h2>
 			<label>Pseudo</label>
 			<input type='text' name='pseudo' id='pseudo' size='20' maxlength='' placeholder='8 à 16 caractères'>
 			
 			<label>E-mail :</label>
 			<input type='text' name='mail' id='mail' size='20' maxlength='' placeholder='----@---'>
 			
 			<label>Login :</label>
 			<input type='text' name='login' id='login' size='20' maxlength='' placeholder='8 à 16 caractères'>

			<label>Confirmer login :</label>
 			<input type='text' name='login' id='login' size='20' maxlength='' placeholder='8 à 16 caractères'>

 			<input type='submit'name='validation' id='validation' value='OK'>
 		</article>
 	</section>

 	 <?php include "footer_inc.php"; ?>