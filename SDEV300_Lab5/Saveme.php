<?php

require_once 'DBconnect.php';

// Retrieve Post Data
	$username = $_POST["id"];
	$password = $_POST["pass"];	

// Call cookie saver
saveLogin($username, $password);

echo "Welcome to our App " . $username;

echo "<p> </p>";

$val = connectDB();

// Ask if they want to view the sample config file
echo "Enter the sample config file to be view";

echo "<form name='view form' method='post' action='Deleteme.php'> ";
echo "<tr> <td>Filename (e.g. sampleconfig.dat):</td> ";
echo "<td><input name='configdata' type='text' size='50'></td> </tr>";

echo "<tr> <td colspan='2' align='center'><input name='btnsubmit' type='submit' value='Submit'></td> </tr>";
echo "</table> </form>";

// Function to store the cookies for later use
function saveLogin($id, $pass){
   $data = $id . ',' . $pass;
   setcookie ("userdata", $data);
}


?>