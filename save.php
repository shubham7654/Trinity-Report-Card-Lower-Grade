<?php

/* $servername = "localhost:3306";
$username = "rahul";
$password = "Tiwari@2022";
$dbname = "reportcard"; */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "reportcard";

$conn = mysqli_connect($servername, $username, $password, $dbname);

date_default_timezone_set("Asia/Kolkata");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$my_date = date("Y-m-d");
$TeacherName = $_POST['studentName'];
$ParentName = $_POST['ParentName'];
$ChildName = $_POST['teacherName'];
$grade = $_POST['ChildRank'];

if ($grade == '10%') {
  $grade = 10;
} else if ($grade == '20%') {
  $grade = 20;
} else if ($grade == '30%') {
  $grade = 30;
} else {
  return 0;
}

$s1input = $_POST['articulation'];
$s2input = $_POST['Confidence'];
$s3input = $_POST['Extemporise'];
$s4input = $_POST['Influencing'];
$s5input = $_POST['StructuredThinking'];

$rank = $_POST['programme'];

$checklist1 = $_POST['check_list'];
if (isset($checklist1)) {
  $checklist_string_1 = implode(",", $checklist1);
} else {
  $checklist_string_1 = '';
}

$checklist2 = $_POST['check_list1'];
if (isset($checklist2)) {
  $checklist_string_2 = implode(",", $checklist2);
} else {
  $checklist_string_2 = '';
}

if (mysqli_query($conn, "INSERT INTO `trinityreports`(`date`, `tname`, `pname`, `sname`, `rank`, `s1`, `s2`, `s3`, `s4`, `s5`, `check_list_1`, `check_list_2`, `level`) VALUES ('$my_date', '$TeacherName', '$ParentName', '$ChildName', $grade, '$s1input', '$s2input', '$s3input', '$s4input', '$s5input', '$checklist_string_1', '$checklist_string_2', $rank)")) {
} else {
  echo "Error:" . mysqli_error($conn);
}

mysqli_close($conn);

?>