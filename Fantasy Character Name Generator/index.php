<?php
$names = "Gandalf,Aragorn,Legolas";
$namesArray = explode(",", $names);
$lowercaseNamesArray = array_map('strtolower', $namesArray);
$joinedNames = implode("*", $lowercaseNamesArray);
echo $joinedNames;
?>
