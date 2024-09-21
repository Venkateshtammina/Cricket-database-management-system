<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

$uname = $_POST['username'];
$age = $_POST['age'];
$runs = $_POST['runs'];
$wickets = $_POST['wickets'];
$no_of_matches = $_POST['no_of_matches'];
$batting_best = $_POST['batting_best'];
$bowling_best = $_POST['bowling_best'];
$name = $_POST['name'];

$query = "UPDATE player SET age='$age', runs='$runs', wickets='$wickets', no_of_matches='$no_of_matches', batting_best='$batting_best', bowling_best='$bowling_best', name='$name' WHERE playername='$playername'";

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
