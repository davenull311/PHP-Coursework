<!--
	Date: 		Feb 5, 2019
	Author: 	Dave Null
	Title: 		commentSummary.php
	Description: Displays user comments made in projects.php
-->

<?php
// Page variables
$myName = "Dave Null";
$course = "SDEV300 6382";

// Retrieve Post Data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$operationCodeName = array(
    "Overlord" => 44,
    "Rolling Thunder" => 68,
    "Desert Storm" => 91,
    "Phantom Fury" => 04,
    "Neptune Spear" => 11,
    "Red Dawn" => 03,
    "Eagle Claw" => 80,
    "Iron Justice" => 03,
    "Urgent Fury" => 83,
    "Steel Curtain" => 05,
    "Spartan Scorpion" => 03,
    "Just Cause" => 89,
    "Beastmaster" => 06,
    "Paul Bunyan" => 76,
    "Linebacker" => 72,
    "Warriors Rage" => 05,
    "Valiant Guardian" => 07,
    "Bayonet Lightning" => 03,
    "Gothic Serpent" => 93,
    "Chattanooga Choo-Choo" => 44
);

// Retrieve Post Data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Set the session information
session_start();
$_SESSION['appusername'] = $username;
$_SESSION['appemail'] = $email;

// Set a 30 minute timeout from last activity
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

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
echo "<table border='0'>";
echo "<tr>
        <td>Thank you for your submissions, " . $_SESSION['appusername'] . "!</td>
    </tr>";
echo "</table>";


// Display table with current projects
echo "<table align='center'>";

echo"<tr>
            <th>Operation</th>
            <th>% Complete</th>
            <th>Comment</th>
            </tr>";

foreach($operationCodeName as $operation => $year) {
    echo "<tr>
                <td>" . $operation . "</td>
                <td align='center'>" . $year . "</td>";

    $operation = str_replace(' ', '_' , $operation);
    $commentKey = "comment" . $operation;
    $comment = $_POST[$commentKey];

    echo "<td align='center'>" . $comment . "</td>
            </tr>";

}

/*
I used var_dump() as a way to ensure that my form data was coming into this page
	echo var_dump($_POST);
*/

echo "<tr>
		<td colspan='3' align='right'><i>Comments submitted at:  " . date('Y-m-d H:i:s T') .
    "</i></td></tr>";

?>

</table>

<br><br>

<?php
// Provide a button to logout
echo "<form name='logout' method='post' action='logout.php'>
        <input name='btnsubmit' type='submit' value='Logout'>
    </form>";
?>
<br><br>

<p>&copy<?php echo Date("Y") . " - " . $myName; ?></p>


</body>
</html>