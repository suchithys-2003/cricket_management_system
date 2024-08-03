<?php

session_start();

$name = $_POST['name'];
$runs = $_POST['runs'];
$wickets = $_POST['wickets'];
$no_of_matches = $_POST['no_of_matches'];

$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

$q = "UPDATE player SET runs='$runs', wickets='$wickets', no_of_matches='$no_of_matches' WHERE playername='$name'";

if(mysqli_query($con, $q)) {
    echo "<script>alert('Update successful!'); window.location.href='rank.php';</script>";
} else {
    echo "<script>alert('Error updating record: ".mysqli_error($con)."'); window.location.href='rank.php';</script>";
}

?>
