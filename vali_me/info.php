<?php
if (isset($_GET['days']) AND isset($_GET['year']) AND isset($_GET['months']) AND isset($_GET['firstname']) AND isset($_GET['lastname']))
{
 $day   = $_GET['days'];
 $year   = $_GET['year'];
 $month   = $_GET['months'];   
 $firstname  = $_GET['firstname'];
 $lastname  = $_GET['lastname'];
 $fulname  = $firstname." ".$lastname;
 $result = ($year + $month + $day) / ($month * 2);

 echo "<h1>$fulname: $result</h1>";

}
else
{
 echo "no data";
}
?>