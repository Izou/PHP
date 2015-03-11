<header>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<nav>
<ul>
<li><a href="menus_formulaire.php">Formulaire Contact</a></li>
</ul>
</nav>
</header>
<h2>Exemples</h2>
<?php
echo 'bonjour <em> tout le </em>monde';
echo '<br>';
$nom='Isa';
echo $nom;
?>

<h2>Exercice 1.1</h2>
<?php
$vitesse_lumiere=299792;
echo 'La vitesse de la lumière est égale à'.' '.$vitesse_lumiere.' '.'km/s.';
?>

<h2>Exercice 1.2</h2>
<?php
define('PI',3.141592);
$pi = (int)PI;
echo 'La valeur entière de PI est'.' '.$pi.'.';
?>

<h2>Exercice 1.3</h2>
<?php
    for($i=0; $i<=20; $i++){
        echo $i." ";}
?> 

<h2>Exercice 1.4</h2>
<?php
    for($i=0; $i<=20; $i++){
    	if ($i<=10) {
    		echo "<font color='green'>$i </font>";
    		/*deuxième solution echo '<font color="green"> .$i.</font>'
    		avec les simples guillemets extérieurs, la variable $i n'est plus reconnue il faut
    		donc la concaténer en rajoutant les points de part et d'autres*/
    	}else{
    		echo "<font color='red'>$i </font>";
    	}
        
    }
?> 