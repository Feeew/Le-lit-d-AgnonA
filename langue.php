<?php 

	header("Cache-Control: no-cache"); //vider le cache
	$default_lang = 'fr'; //langue par d�faut
	$dir_lang = 'langue/'; //r�pertoire des fichiers langues
	$extension = '.php'; //extension des fichiers langue
	 
	/*
	 * liste des fichiers langue disponibles
	 * s'assurer que chacun de ces fichiers existe bien dans
	 * le r�pertoire
	*/
	$langues = array('en', 'fr');
	$lang = '';
	 
	/*
	 * si le param�tre "lang" est d�fini dans l'url et s'il existe dans la liste
	 * $lang prend la valeur de $_GET['lang']
	 */
	if (isset($_GET['lang']) && in_array($_GET['lang'], $langues)) {
		$lang = $_GET['lang'];
	}
	 
	/*
	 * sinon v�rifier prendre la valeur du cookie $_COOKIE['lang']
	 * (s'il est d�fini)
	 */
	else if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $langues)) {
		$lang = $_COOKIE['lang'];
	}
	 
	/*
	 * sauver la valeur de $lang dans le cookie $_COOKIE['lang']
	 */
	if (!empty($lang)) {
		setcookie('lang', $lang);
	}
	/*
	 * quelque soit la langue d'affichage s�lectionn�e
	 * inclure le fichier langue par d�faut pour ne manquer
	 * aucune variable
	 */
	include($dir_lang . $default_lang . $extension);
	 
	/*
	 * seulement apr�s, v�rifier que le fichier langue
	 * d�fini dans $lang existe et l'inclure
	 */
	if (!empty($lang) && $lang != $default_lang &&
	 
	is_file($dir_lang. $lang . $extension)) {
		include($dir_lang . $lang . $extension);
	}

?>