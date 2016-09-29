<!doctype html>
<!--
    Created by Keon Hee Park 
    In-Class Exercise 2: Basis Exercise
    Basic_Handle_Form.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 29, 2016
-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Basic Handle Form</title>
</head>

<body>
    <?php
    $name = $_POST['inputByUser'];
    print "<p>Hello $name</p>";
    ?>
</body>

</html>