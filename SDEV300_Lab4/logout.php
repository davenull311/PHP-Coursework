<!--
	Date: 		Feb 5, 2019
	Author: 	Dave Null
	Title: 		logout.php
	Description: Logs the user out and clears session data
-->

<?php
// Page variables
$myName = "Dave Null";
$course = "SDEV300 6382";
?>


<!DOCTYPE html>

<html>
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

<?php
session_start();
unset($_SESSION['appusername']);
unset($_SESSION['appemail']);

// Display the Session information
echo "<h3 align='center'> Session Data after Logout </h3>";

echo "<p align='center'>You have been successfully logged out.</p>";

echo "<table align='center' border='0'>";
echo "<tr>
        <td>Username: </td>
        <td>" . $_SESSION['appusername'] . "</td>
    </tr>";

echo "<tr>
        <td>Email: </td>";
echo "<td>" . $_SESSION['appemail']. "</td>";
echo "</tr>";
echo "</table>";

?>

<table align='center' border='0'>
    <tr>
        <form name='logout' method='post' action='DaveNull_Lab4.php'>
            <input name='btnsubmit' type='submit' value='Login Page'>
        </form>
    </tr>
</table>

</body>
</html>
