<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "library");
if (mysqli_connect_errno()) {
    die("Could not connect: " . mysqli_connect_error());
}
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "library");
if(isset($_POST["price"]) && isset($_POST["book_id"])) {
    
    $price = $_POST["price"];
    $book_id = $_POST["book_id"];

    $sql = "UPDATE book SET price = " . $price . " WHERE book_id = '" . $book_id . "'";

    // 4. รันคำสั่ง SQL
    if (!mysqli_query($con, $sql)) {
        // แก้จาก mysqli_connect_error เป็น mysqli_error($con)
        die("Error: " . mysqli_error($con)); 
    } else {
        echo "1 record updated.";
    }

} else {
    echo "ไม่พบข้อมูลที่ส่งมา (Price หรือ Book ID หายไป)";
}

mysqli_close($con);
?>
</body>
</html>