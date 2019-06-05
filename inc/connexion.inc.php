<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';

$serveur = "localhost";
$loginserveur = "root";
$mdpserveur = "";
/* locale */ //$serveur = "localhost"; $bddname = "cnamcp09_nfa083cf1_2018";
/* locale */ //$loginserveur = "root"; $mdpserveur = "";

/* online */ $serveur = "localhost"; $bddname = "id9843978_cnamcp09_nfa083cf1_2018";
/* online */ $loginserveur = "id9843978_christophe"; $mdpserveur = "christophe";


$con = new PDO('mysql:host='.$serveur.';dbname='.$bddname,$loginserveur,$mdpserveur,$pdo_options);