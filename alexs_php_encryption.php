<?php 
//This script was made by Alexander Lee Silva.
//The date was Monday, October, 21, 2013, Finished at EST 11:51
####################################################################
##This script is to create an encryption
####################################################################
//creating the function encrypt
function encrypt ($string) {
############################################################
##Starting the encryption process rotates string 
############################################################
//rotating the string 13 characters
$string = str_rot13($string);
############################################################
##Removing any difference between letters
############################################################
//converting the string to all lowercase
$string = strtolower($string);
############################################################
##This section converts all symbols to numbers
############################################################
/* This section converts all symbols to numbers. 
A couple symbols cause issues so i commented those lines out 
and moved them to the top. I believe the rest works fine but 
i reordered the rest of the numbers completely. I thought that
having number 44 and 48 missing in order would cause a weakness 
in the encryption.*/ 
//the two lines as previously written
//$string = str_replace(''','44',$string);
//$string = str_replace('\','48',$string);
$string = str_replace('`','66',$string);
$string = str_replace('~','65',$string);
$string = str_replace('!','64',$string);
$string = str_replace('@','63',$string);
$string = str_replace('#','62',$string);
$string = str_replace('$','61',$string);
$string = str_replace('%','60',$string);
$string = str_replace('^','59',$string);
$string = str_replace('&','58',$string);
$string = str_replace('*','57',$string);
$string = str_replace('(','56',$string);
$string = str_replace(')','55',$string);
$string = str_replace('-','54',$string);
$string = str_replace('_','53',$string);
$string = str_replace('=','52',$string);
$string = str_replace('+','51',$string);
$string = str_replace('[','50',$string);
$string = str_replace('{','49',$string);
$string = str_replace(']','48',$string);
$string = str_replace('}','47',$string);
$string = str_replace('|','46',$string);
$string = str_replace(';','45',$string);
$string = str_replace(':','44',$string);
$string = str_replace('"','43',$string);
$string = str_replace(',','42',$string);
$string = str_replace('<','41',$string);
$string = str_replace('.','40',$string);
$string = str_replace('>','39',$string);
$string = str_replace('/','38',$string);
$string = str_replace('?','37',$string);
#########################################################
##This section converts string numbers to other numbers
#########################################################
$string = str_replace('1','36',$string);
$string = str_replace('2','35',$string);
$string = str_replace('3','34',$string);
$string = str_replace('4','33',$string);
$string = str_replace('5','32',$string);
$string = str_replace('6','31',$string);
$string = str_replace('7','30',$string);
$string = str_replace('8','29',$string);
$string = str_replace('9','28',$string);
$string = str_replace('0','27',$string);
#########################################################
##This section converts string letters to numbers
#########################################################
$string = str_replace('a','26',$string);
$string = str_replace('b','25',$string);
$string = str_replace('c','24',$string);
$string = str_replace('d','23',$string);
$string = str_replace('e','22',$string);
$string = str_replace('f','21',$string);
$string = str_replace('g','20',$string);
$string = str_replace('h','19',$string);
$string = str_replace('i','18',$string);
$string = str_replace('j','17',$string);
$string = str_replace('k','16',$string);
$string = str_replace('l','15',$string);
$string = str_replace('m','14',$string);
$string = str_replace('n','13',$string);
$string = str_replace('o','12',$string);
$string = str_replace('p','11',$string);
$string = str_replace('q','10',$string);
$string = str_replace('r','9',$string);
$string = str_replace('s','8',$string);
$string = str_replace('t','7',$string);
$string = str_replace('u','6',$string);
$string = str_replace('v','5',$string);
$string = str_replace('w','4',$string);
$string = str_replace('x','3',$string);
$string = str_replace('y','2',$string);
$string = str_replace('z','1',$string);
###########################################################
##This section creates a MD5 of the converted string
###########################################################
//creating a md5 of the number replaced string
$string = md5 ($string);
###########################################################
##This section rotates the MD5 string 13 characters 
###########################################################
//rotating the string 13 characters
$string = str_rot13($string);
#########################################################
##This section converts string numbers to other numbers
#########################################################
$string = str_replace('0','36',$string);
$string = str_replace('9','35',$string);
$string = str_replace('8','34',$string);
$string = str_replace('7','33',$string);
$string = str_replace('6','32',$string);
$string = str_replace('5','31',$string);
$string = str_replace('4','30',$string);
$string = str_replace('3','29',$string);
$string = str_replace('2','28',$string);
$string = str_replace('1','27',$string);
###############################################################
##This section converts string letters to numbers
###############################################################
$string = str_replace('z','26',$string);
$string = str_replace('y','25',$string);
$string = str_replace('x','24',$string);
$string = str_replace('w','23',$string);
$string = str_replace('v','22',$string);
$string = str_replace('u','21',$string);
$string = str_replace('t','20',$string);
$string = str_replace('s','19',$string);
$string = str_replace('r','18',$string);
$string = str_replace('q','17',$string);
$string = str_replace('p','16',$string);
$string = str_replace('o','15',$string);
$string = str_replace('n','14',$string);
$string = str_replace('m','13',$string);
$string = str_replace('l','12',$string);
$string = str_replace('k','11',$string);
$string = str_replace('j','10',$string);
$string = str_replace('i','9',$string);
$string = str_replace('h','8',$string);
$string = str_replace('g','7',$string);
$string = str_replace('f','6',$string);
$string = str_replace('e','5',$string);
$string = str_replace('d','4',$string);
$string = str_replace('c','3',$string);
$string = str_replace('b','2',$string);
$string = str_replace('a','1',$string);
###############################################################
##This section creates a MD5 of the string
###############################################################
//creating a md5 of the number replaced string
$string = md5 ($string);
###############################################################
##This section rotates the MD5 string 13 characters 
###############################################################
//rotating the string 13 characters
$string = str_rot13($string);
###############################################################
##This section converts string numbers to letters
###############################################################
$string = str_replace('1','a',$string);
$string = str_replace('2','b',$string);
$string = str_replace('3','c',$string);
$string = str_replace('4','d',$string);
$string = str_replace('5','e',$string);
$string = str_replace('6','f',$string);
$string = str_replace('7','g',$string);
$string = str_replace('8','h',$string);
$string = str_replace('9','i',$string);
$string = str_replace('0','j',$string);
################################################################
##This section converts string letters to letters and numbers
################################################################
$string = str_replace('a','k',$string);
$string = str_replace('b','l',$string);
$string = str_replace('c','m',$string);
$string = str_replace('d','n',$string);
$string = str_replace('e','o',$string);
$string = str_replace('f','p',$string);
$string = str_replace('g','q',$string);
$string = str_replace('h','r',$string);
$string = str_replace('i','s',$string);
$string = str_replace('j','t',$string);
$string = str_replace('k','u',$string);
$string = str_replace('l','v',$string);
$string = str_replace('m','w',$string);
$string = str_replace('n','x',$string);
$string = str_replace('o','y',$string);
$string = str_replace('p','z',$string);
$string = str_replace('q','1',$string);
$string = str_replace('r','2',$string);
$string = str_replace('s','3',$string);
$string = str_replace('t','4',$string);
$string = str_replace('u','5',$string);
$string = str_replace('v','6',$string);
$string = str_replace('w','7',$string);
$string = str_replace('x','8',$string);
$string = str_replace('y','9',$string);
$string = str_replace('z','0',$string);
###########################################################
##This section creates a MD5 of the converted string
###########################################################
//creating a md5 of the number replaced string
$string = md5 ($string);
###########################################################
##This section rotates the MD5 string 13 characters 
###########################################################
//rotating the string 13 characters
$string = str_rot13($string);
#########################################################
##This section converts string numbers to alphanumeric
#########################################################
$string = str_replace('1','<',$string);
$string = str_replace('2','>',$string);
$string = str_replace('3','{',$string);
$string = str_replace('4','}',$string);
$string = str_replace('5','[',$string);
$string = str_replace('6',']',$string);
$string = str_replace('7','(',$string);
$string = str_replace('8',')',$string);
$string = str_replace('9','*',$string);
$string = str_replace('0','&',$string);
####################################################################
##This section converts string letters to alphanumeric and letters
####################################################################
$string = str_replace('a','^',$string);
$string = str_replace('b','%',$string);
$string = str_replace('c','$',$string);
$string = str_replace('d','#',$string);
$string = str_replace('e','@',$string);
$string = str_replace('f','!',$string);
$string = str_replace('g','`',$string);
$string = str_replace('h','~',$string);
$string = str_replace('i','a',$string);
$string = str_replace('j','b',$string);
$string = str_replace('k','c',$string);
$string = str_replace('l','d',$string);
$string = str_replace('m','e',$string);
$string = str_replace('n','f',$string);
$string = str_replace('o','g',$string);
$string = str_replace('p','h',$string);
$string = str_replace('q','i',$string);
$string = str_replace('r','j',$string);
$string = str_replace('s','k',$string);
$string = str_replace('t','l',$string);
$string = str_replace('u','m',$string);
$string = str_replace('v','n',$string);
$string = str_replace('w','o',$string);
$string = str_replace('x','p',$string);
$string = str_replace('y','q',$string);
$string = str_replace('z','r',$string);
###########################################################
##This section creates a MD5 of the converted string
###########################################################
//creating a md5 of the number replaced string
$string = md5 ($string);
###########################################################
##This section rotates the MD5 string 13 characters 
###########################################################
//rotating the string 13 characters
$string = str_rot13($string);
###########################################################
##This section prints the converted string
###########################################################
//Prints the encrypted string	
echo $string;
}
###########################################################
##This is the section that will be converted
###########################################################
//Enter the phrase to convert in the line below this.
encrypt('This is the phrase that will be encrypted');
?>
