<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
$con = mysqli_connect ("localhost", "root", "", "library");
if(!$con) {
die("Could not connect: "
. mysqli_error($con = mysqli_connect ("localhost", "root", "", "library")));
}
mysqli_select_db($con, "library");
// 3) คำสั่ง SQL ลบข้อมูล
$sql="DELETE FROM book WHERE book_id = '" . $_POST["book_id"] . "'";

if(!mysqli_query($con, $sql)) {die("Error: " . mysqli_error($con));
} else {
echo "1 record deleted.";
}
mysqli_close($con);
?>
</body>
</html>