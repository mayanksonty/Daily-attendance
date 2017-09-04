
<?php

include("mv1.php");
$userid='rcet/105';
$username='monika123';
$pass='monika3456';
$fname='monika';
$lname='sahu';
$utype='faculty';
$select=mysqli_query($conn,"call create_user('$userid','$username','$pass','$fname','$lname','$utype');");

?>