<?php

// set database server access variables: 
$host = "localhost";
$user = "sms";
$pass = "wordpress";
$db = "smsplugin";

// open connection 
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database 
mysql_select_db($db) or die ("Unable to select database!");

// create query 
$query = "SELECT * FROM messages";

// execute query 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned 
if (mysql_num_rows($result) > 0) {
    // yes 
    // print them one after another 
    echo "<table cellpadding=10 border=1>";
    while($row = mysql_fetch_row($result)) {
        echo "<tr>";
        echo "<td>"."<center>".$row[7]."<br>".$row[2]."<br>".$row[0]."<br>".$row[4]."<br>".$row[8]."</center>"."</td>";
        echo "<td>" . $row."</td>";
        echo "<td>".$row."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else {
    // no 
    // print status message 
    echo "No rows found!";
}

// free result set memory 
mysql_free_result($result);

// close connection 
mysql_close($connection);

?>