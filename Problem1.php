<!doctype html>
<!--
    Created by Keon Hee Park 
    In-Class Exercise 1: Problem 1 using PHP
    Problem1.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 29, 2016
-->
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Problem 1 using PHP</title>
</head>

<body>
    <h1>Problem 1 using PHP</h1>
    <p>Write a PHP script to extract the user name from the following email ID.</p>
    <p><i>Sample String</i>: 'lhenry@gsu.edu.com</p>

    <?php
    $emailID = "'lhenry@gsu.edu.com";
    $stopSubstring = "@";
    
    $extractUserName = explode("@", $emailID);
    
    print "<hr>";
    
    print "<p>" ."Extracted the username: " . "<b>" . $extractUserName[0] . "</b>" . "</p>";
?>

</body>

</html>