<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

$team = $_POST['team'];
$played= $_POST['played'];
$won = $_POST['won'];
$lost = $_POST['lost'];
$nr = $_POST['nr'];
$points = $_POST['points'];
$nrr = $_POST['nrr'];
$name = $_POST['name'];

$query = "UPDATE tournament SET played='$played', won='$won', lost='$lost', nr='$nr', points='$points', nrr='$nrr' WHERE team='$team'";

if (mysqli_query($con, $query)) {
    echo "<script type='text/javascript'>alert('RECORD UPDATED SUCCESSFULLY!!');</script>";
    header("refresh:0.01; url=admin1st.html");
} else {
    echo "<script type='text/javascript'>alert('ERROR');</script>";
    header("refresh:0.01; url=admin1st.html");
    echo mysqli_error($con);
}

mysqli_close($con);
?>
