<!--
	Date: 		Feb 5, 2019
	Author: 	Dave Null
	Title: 		DaveNull_Lab4.html
	Description: Splash page for Lab 4
-->

<?php
// Page variables
$myName = "Dave Null";
$course = "SDEV300 6382";
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <title>Lab 4: Dave Null</title>
    <meta name="description" content="Lab 4"/>
    <meta name="author" content="Dave Null"/>
    <meta name="date" content="2/5/2019"/>
    <meta charset="UTF-8"/>
</head>

<body>

<h1 align="center">Lab 4: PHP and Web Forms</h1>
<hr width="80%">
<table border="0" id="heading" align="center" width="60%">
    <tr>
        <td align="center"><h3>By: <?php echo $myName; ?></h3></td>
        <td align="center"><h3><?php echo $course; ?></h3></td>
        <td align="center"><h3><?php echo Date("M j, Y"); ?></h3></td>
    </tr>
</table>
<hr width = "80%">

<br>

<!-- 1. Login form consisting of: username, email and password -->
<form action="projects.php" method="post">
    <table border="0">
        <tr>
            <th>Username: </th>
            <td><input type="text" name="username" size="50"></td>
        </tr>
        <tr>
            <th>Email: </th>
            <td><input type="text" name="email" size="50"></td>
        </tr>
        <tr>
            <th>Password: </th>
            <td><input type="password" name="password" size="50"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" align="right"></td>
        </tr>
    </table>

</form>

<!--   -->

</body>
</html>