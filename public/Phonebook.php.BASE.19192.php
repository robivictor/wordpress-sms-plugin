<<<<<<< HEAD
<?php

// set database server access variables: 
$host = "localhost";
$user = "smsplugin";
$pass = "wordpress";
$db = "smsplugin";

// open connection 
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

// select database 
mysql_select_db($db) or die ("Unable to select database!");

// create query 
$query = "SELECT * FROM phone_list";

// execute query 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

// see if any rows were returned 
if (mysql_num_rows($result) > 0) {
  // yes
  // print them one after another
  echo "<a class='btn btn-default'>Compose</a>";
  echo "<a class='btn btn-default'>Inbox</a>";
  echo "<a class='btn btn-default'>Outbox</a>";
  echo "</br>";

  echo "<table class='table table-responsive table-striped' style='width:80%'>";
echo "<thead>";
      echo "<tr>";
      echo "<td> Name </td>";
      echo "<td> Phonenumber </td>";
      echo "<td> Subscription Date</td>";
      echo "<tr>";
echo "<thead>";
    while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<tr>";
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
=======

		<body class="body" ng-app="Demo" ng-controller="DemoController">

	<div class="actions"> 	
		<button class="btn btn-default" type="submit" ><a href="compose/compose.html">Compose</a></button>
		<button class="btn btn-default" type="submit" ><a href="#">Sent Messages</a></button>
		<button class="btn btn-default" type="submit" ><a href="#">Inbox</a></button>
		<button class="btn btn-default" type="submit" ><a href="#">Delete</a></button>
    </div>
	
	<div  class="list">
	
	       <table class="table table-hover" style="width:100%">
		          
  <tr>
    <td>#.<input type="checkbox"></td>
    <td>Name</td>
    <td>Phone Number</td>
	<td>Email Address</td>
  </tr>
  <tr>
    <td>1.<input type="checkbox"></td>
    <td>Tesfa Elias</td>
    <td>+2519111213</td>
	<td>myemail@yahoo.com</td>
  </tr>     
   <tr>
    <td>2.<input type="checkbox"></td>
    <td>Elias Markos</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
  <tr>
    <td>3.<input type="checkbox"></td>
    <td>Bereket nahom</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
  <tr>
    <td>4.<input type="checkbox"></td>
    <td>Solomon Bekele</td>
    <td>+2519111213</td>
	<td>myemail@yahoo.com</td>
  </tr>
  <tr>
    <td>5.<input type="checkbox"></td>
    <td>Saba Elias</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
  <tr>
    <td>6.<input type="checkbox"></td>
    <td>Eyob Tesma</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
  <tr>
    <td>7.<input type="checkbox"></td>
    <td>Solomon Bekele</td>
    <td>+2519111213</td>
	<td>myemail@yahoo.com</td>
  </tr>
  <tr>
    <td>8.<input type="checkbox"></td>
    <td>Saba Elias</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
  <tr>
    <td>9.<input type="checkbox"></td>
    <td>Eyob Tesma</td>
    <td>+2519111213</td>
	<td>myemail@gmail.com</td>
  </tr>
     </div>
		</body>
</html>
>>>>>>> 6f4a45ccc27701e6d2ddf058d26dd1e0a5617dc1
