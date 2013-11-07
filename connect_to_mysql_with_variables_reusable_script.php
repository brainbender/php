<?php
//This script was made by Alexander Lee Silva
//The date is Tuesday, October, 22, 2013. 
############################################################################################
##This script is to connect to the mysql database with variables 
############################################################################################
/* This section will describe how to use this script. 
This script is meant to be filled out before use. 
The variables should be set to equal your information.
Before each variable I will comment with what to enter. */
############################################################################################
##Creating the variables for host, username, and pass
############################################################################################
//You can leave localhost for local environments otherwise replace "localhost with "your_host_name".  
$dbhost = "localhost";
//Replace "username" with your actual Mysql username. (Example: $dbuser = "Alexander"; )
$dbuser = "username";
//Replace "password" with your actual Mysql password. (Example: $dbpass = "asecuremysqlpassword"; )
$dbpass = "password";
#########################################################################################################################
##Creating variable for error1 in connecting to the database. This lets users know which level of error they recieved.
#########################################################################################################################
/*The statement "Could not connect to the MySql database authentication failure!" 
can be changed to any statement you want returned as an error. */
$dberror1 = "Could not connect to the MySql database authentication failure!";
#############################################################################################
##Creating the connection variable and making it simple to execute later. 
#############################################################################################
$con = mysql_connect ($dbhost,$dbuser,$dbpass) or die ($dberror1);
//This next line lets you know if the connection was successful.
if ($con == true) {
	echo "You have successfully connected to the database.";
} 
#########################################################################################################################
##Creating variable for error2 in connecting to the database. This lets users know which level of error they recieved.
#########################################################################################################################
/*The statement "Could not connect to the specified MySql database, database failure!" 
can be changed to any statement you want returned as an error. */
$dberror2 = "Could not connect to the specified MySql database, database failure!";
##########################################################################################################################
##Selecting which mysql database to use
##########################################################################################################################
/*This next line selects the database to use. 
Replace ('mydatabasename') with the database you want to connect to. */
$select_db = mysql_select_db ('mydatabasename') or die (dberror2);
##########################################################################################################################
##Creating ID Variable instead of just using the id of a specific database
##########################################################################################################################
/*This script is setup to connect to only one id from a database
create a variable for an ID number for databases with multiple users. 
* Uncomment when finished. */
//$id = mysql_insert_id /* ??? not sure how to finish this line. ??? */
##########################################################################################################################
##Query database selection
##########################################################################################################################
/*If you finish writing ID variable for multiple users
come back and change ID to variable. */
//Change table_name to the name of the database you want to query.
//Change ID="1" to the ID number you want to use. (Example: $query = "SELECT * FROM table_alexander1 WHERE ID='5';";)
$query = "SELECT * FROM table_name WHERE ID='1';";
$fetch = mysql_query($query) or die ("Could not find database information!");
//While loop 
while ($row = mysql_fetch_assoc($fetch)) {
##########################################################################################
##Put as many lines as you want in the section below for whatever you need.
##########################################################################################
	echo $row ('ID');
	echo $row ('database row name')."<br>";
	echo $row ('database row name 2')."<br>";
	echo $row ('database row name 3')."<br>";
}	
?>
