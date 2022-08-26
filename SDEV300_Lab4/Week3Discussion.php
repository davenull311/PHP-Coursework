<!--
Date: 			Jan 31, 2019
Author: 		Dave Null
Title: 			Week3Discussion.php
Description: 	Displays two tables; one that calculates functions, and one that displays a quote.
-->

<!-- PHP Code -->
<?php

// Set the variables
$myName = "Dave Null";
$course = "SDEV 300 6382";

// Define length and width arrays
$rectLength = array(5, 10, 15, 20, 25);
$rectWidth = array(3, 5, 7, 9, 11, 13, 15);

// Define functions
function RectangleArea($l, $w){
    $rectArea = $l * $w;
    echo $rectArea;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Discussion 3 - Dave Null</title>
    <meta name="description" content="Discussion 3"/>
    <meta name="author" content="Dave Null"/>
    <meta charset="UTF-8"/>
</head>


<body>
<h1 align="center">Week 3 Discussion</h1>
<hr width="80%">
<table border="0" id="heading" align="center" width="60%">
    <tr>
        <td><center><h3>By: <?php echo $myName; ?></h3></center></td>
        <td><center><h3><?php echo $course; ?></h3></center></td>
        <td><center><h3><?php echo Date("F j, Y"); ?></h3></center></td>
    </tr>
</table>
<hr width = "80%">

<br>

<table id="function" class="function" align="center" border="1">

    <!-- Call the function -->
    <?php

    echo "<tr>";
    echo "<th>Length</th>";
    foreach ($rectLength as $length){
        echo "<th>" . $length . "</th>";
    }
    echo "</tr>";
    foreach ($rectWidth as $width){
        echo "<tr>";
        echo "<td>Width " . $width . ": </td>";
        foreach ($rectLength as $length){
            echo "<td>";
            RectangleArea($length, $width);
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
