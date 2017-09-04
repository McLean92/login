<?php 
// forbindelse til mySQL server med mysqli metoden

// 1. Konstanter til forbindelsesdata TIL localhost 

const HOSTNAME  = 'mysql34.unoeuro.com'; // servernavn 
const MYSQLUSER  = 'charmaine_dk'; // super bruger (remote har man særskilte database brugere)
const MYSQLPASS  = 'kwathabisile'; // bruger password
const MYSQLDB  = 'charmaine_dk_db'; // database navn 

/*
Min lokale forbindelse: 

const HOSTNAME  = 'localhost'; // servernavn 
const MYSQLUSER  = 'root'; // super bruger (remote har man særskilte database brugere)
const MYSQLPASS  = ''; // bruger password
const MYSQLDB  = 'login'; // database navn 
*/


// 2. Oprette forbindelsen via mysqli objekt

$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

// definere et character-set (utf-8) for forbindelsen

$con->set_charset('utf8');


// Forbindelses-tjek

//hvis forbindelsen ikke lykkedes
if($con->connect_error){
	die($con->connect_error);
}else {
	
}


// hvis indeholder rent php kan slut tag'et undlades... 
