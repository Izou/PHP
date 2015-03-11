<?php
 	include "init_inc.php";
 	$titre='Contact';
 	$rajoutC="class='active'";
?>
 	<?php include "header_inc.php";?>
 	<?php include "nav_inc.php"; ?>

 	<section class='content' id='accueil'>
 		<aside>
 			<p>aside</p>
 		</aside>

 		<article>
 			<h2>Contact</h2>
 			<label>Nom</label>
 			<input type='text' name='nom' id='nom' size='20' maxlength='' placeholder='8 à 16 caractères'>
 			
 			<label>E-mail :</label>
 			<input type='text' name='mail' id='mail' size='20' maxlength='' placeholder='----@---'>
 			
 			<label>Sujet :</label>
 			<input type='text' name='sujet' id='sujet' size='20' maxlength='' placeholder='8 à 16 caractères'>

			<label>Message :</label>
 			<textarea name='message'></textarea>

 			<input type='submit'name='validation' id='validation' value='OK'>
 		</article>
 	</section>

 	 <?php include "footer_inc.php"; ?>