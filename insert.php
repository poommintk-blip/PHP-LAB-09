<html>
<body>
<?php
$con = mysqli_connect ("localhost", "root", "default", "library");
if(!$con) {
die("Could not connect: "
. mysqli_connect_error());
}
mysqli_select_db($con, "library");
// สั่งคำสั่ง SQL เพิ่มข้อมูล
$sql =
"INSERT INTO book (book_id, book_name) VALUES('" . $_POST['book_id'] . "', '" . $_POST['book_name'] . "')";
mysqli_query($con, $sql);
echo "1 record added!<br /><br />";
mysqli_close($con);
?>
</body>
</html>