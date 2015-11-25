<?php
/**	 
 * PHP-Databases:
 * Written By J Harvey
 * Lists out the MySQL Databases on your Server
 * 
 * Fill out the $user, $pass, $server variables
 * with those that connect to your MySQL Server
 */
 
 		echo "Databases on Server:";
 		// List Out Databases:
		$user = '';
		$pass = '';
		$server = '';
		$query = "SELECT schema_name FROM information_schema.schemata WHERE schema_name NOT IN ('information_schema', 'mysql', 'performance_schema')";
		
		echo "<ul>";
		$dbh = new PDO( "mysql:host=$server", $user, $pass );
		//$dbs = $dbh->query( 'SHOW DATABASES' );
		$dbs = $dbh->query($query);
		
		while( ( $db = $dbs->fetchColumn( 0 ) ) !== false )
		{
				echo '<li>'.$db.'</li>';
		}
		echo "</ul>";
		
 
 
 
 ?>