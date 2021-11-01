<?
$dbHost = "localhost";
$dbUser = "fabbypr_adm1n";
$dbPass = "fab12D1amonds!*!";
$dbName = "fp_prints_db";

function dbconnect() {
    	
	global $dbHost;
	global $dbUser;
	global $dbPass;
	global $dbName;
    
    // Attempt to connect to database server
    $link = @mysql_connect($dbHost, $dbUser, $dbPass);
    @mysql_select_db($dbName);

    // If connection failed... **** MAYBE CARRIED OUT IN THE CALLER SCRIPT ****
    if (!$link) {        
        echo "Couldn't connect to database server";
    }
    
    return $link;
}


?>
