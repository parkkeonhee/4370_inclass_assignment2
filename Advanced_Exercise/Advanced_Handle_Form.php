<!doctype html>
<!--
    Created by Keon Hee Park 
    In-Class Exercise 2: Advanced Exercise
    Advanced_Handle_Form.php
	Course: CSC 4350 - Web Programming
	Instructor: Louis Henry
	Date: September 29, 2016
-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Advanced Handle Form</title>
</head>

<body>
    <?php
        $title = $_POST['title'];
        $forename = $_POST['forename'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $birthyear = $_POST['birthyear'];
        $thisyear = date(Y);
        $age = $thisyear - $birthyear;
        print '<p>Hello, ' . "$title $forename $surname" . ' of ' . "$address.</p>";
        print '<p>' . 'You will be ' . "$age" . ' this year.' . '</p>';
    ?>
</body>

</html>