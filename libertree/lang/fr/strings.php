<?php

if(! function_exists("string_plural_select_fr")) {
function string_plural_select_fr($n){
	$n = intval($n);
	return intval($n > 1);
}}
;
$a->strings["Post to libertree"] = "Publier sur libertree";
$a->strings["libertree Post Settings"] = "Réglages des messages sur libertree";
$a->strings["Enable Libertree Post Addon"] = "Activer leaddonde publication sur libertree";
$a->strings["Libertree API token"] = "Clé de l'API libertree";
$a->strings["Libertree site URL"] = "URL du site libertree";
$a->strings["Post to Libertree by default"] = "Publier sur libertree par défaut";
$a->strings["Submit"] = "Envoyer";
