<!DOCTYPE html>
<html>
<head>
	<meta charset=iso-8859 />
	<title>Gite - Le lit d'AgnonA</title>
	<link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
	<link href='http://fonts.googleapis.com/css?family=Gabriela|Berkshire+Swash' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="global.js"></script>
	<script type="text/javascript" src="jquery-1.10.2.js"></script>
</head>
<body>

	<?php include('langue.php'); ?>
	

	
	
<div id="wrapper"> 
  <div id="menu"> 
    <ul id="accueil_menu" class="ul_menu">
      <li><a id="accueil" onclick="link_to(this.id);"><?php echo $home;?></a></li>
    </ul>
    <ul id="en_savoir_plus_menu" class="ul_menu">
      <li><a><?php echo $ESP;?></a></li>
      <ul id="en_savoir_plus_sous_menu" class="ul_sous_menu">
        <li><a id="description" onclick="link_to(this.id);"><?php echo $ESP_desc;?></a></li>
        <li><a id="photos" onclick="link_to(this.id);"><?php echo $ESP_photos;?></a></li>
        <li><a id="prix" onclick="link_to(this.id);"><?php echo $ESP_prix;?></a></li>
        <li><a id="carte" onclick="link_to(this.id);"><?php echo $ESP_carte;?></a></li>
      </ul>
    </ul>
    <ul id="aux_alentours_menu" class="ul_menu">
      <li><a><?php echo $aux_alentours;?></a></li>
      <ul id="aux_alentours_sous_menu" class="ul_sous_menu">
        <li><a id="culture" onclick="link_to(this.id);"><?php echo $AA_culture;?></a></li>
        <li><a id="sport" onclick="link_to(this.id);"><?php echo $AA_sport;?></a></li>
        <li><a id="tourisme" onclick="link_to(this.id);"><?php echo $AA_tourisme;?></a></li>
        <li><a id="gastronomie" onclick="link_to(this.id);"><?php echo $AA_gastronomie;?></a></li>
        <li><a id="liens" onclick="link_to(this.id);"><?php echo $AA_liens;?></a></li>
      </ul>
	    <ul id="accueil_menu" class="ul_menu">
      <li><a id="accueil" onclick="link_to(this.id);"><?php echo $home;?></a></li>
    	</ul>
    </ul>
    <div id="title"> <img src="img/Titre.png" alt="Le domaine de Tara" /> </div>
  </div>
  <br />
  <br />
  <div id="flag"> <a href="?lang=<?php if(isset($_GET['lang'])){if ($_GET['lang'] != ''){if($_GET['lang'] == "fr") echo "en"; else echo "fr";}}else echo "en";?>"><img width=40 height=35 src="img/icone_<?php if(isset($_GET['lang'])){if ($_GET['lang'] != ''){if($_GET['lang'] == "fr") echo "en"; else echo "fr";}}else echo "en";?>.png" /></a> 
  </div>
  <div id="main"> 
    <div id="page_accueil" class="page" style="display:block"> 
      <?php include('main.php') ?>
    </div>
    <div id="page_description" class="page"> 
      <?php include('description.php') ?>
    </div>
    <div id="page_photos" class="page"> 
      <?php include('photos.php') ?>
    </div>
    <div id="page_prix" class="page"> 
      <?php include('prix.php') ?>
    </div>
    <div id="page_carte" class="page"> 
      <?php include('carte.php') ?>
    </div>
    <div id="page_culture" class="page"> 
      <?php include('culture.php') ?>
    </div>
    <div id="page_sport" class="page"> 
      <?php include('sport.php') ?>
    </div>
    <div id="page_tourisme" class="page"> 
      <?php include('tourisme.php') ?>
    </div>
    <div id="page_gastronomie" class="page"> 
      <?php include('gastronomie.php') ?>
    </div>
    <div id="page_liens" class="page"> 
      <?php include('liens.php') ?>
    </div>
  </div>
</div>

	
	</div>


</body>
</html>