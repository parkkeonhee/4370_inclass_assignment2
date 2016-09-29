<!--
    Created by Keon Hee Park 
    In-Class Exercise 2: Intermediate Exercise
    Interediate_Handle_Form.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 29, 2016
-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Intermediate Handle Form</title>
</head>

<body>
    <?php
    $title = $_POST['title'];
    $firstName = $_POST['forename'];
    $lastName = $_POST['surname'];
    $address = $_POST['address'];
    print '<p>' . '"Hello, '. $title . ' ' . $firstName
        . ' ' . $lastName . ' of ' . $address . '"' . ".";
    ?>
</body>

</html>