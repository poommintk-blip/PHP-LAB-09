<html>
<body>
<?php
if(!$con) {
$con = mysqli_connect("localhost", "root", "");
die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con, "library");
// คำสั่ง SQL แก้ไขข้อมูล
$sql="UPDATE book SET price = "
. $_POST["price"] . " WHERE book_id = '"
. $_POST["book_id"] . "'";
if(!mysqli_query($con, $sql)) {
die("Error: " . mysqli_connect_error($con));
} else {
echo "1 record updated.";
}
mysqli_close($con);
?>
</body>
</html>