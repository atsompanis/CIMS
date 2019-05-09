<?php

session_start();

include 'dbh.php';

$sql= "UPDATE internships SET isarchived=1 WHERE internship_Id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);

header("Location: myCurrentListings.php?archive=success");
