<!-- Connection to database -->
<?php
$conn = mysqli_connect("localhost","root","","book_db");

if(!$conn){
    die("Connection failed");
}

$sql = "SELECT * FROM books";
$result = mysqli_query($conn,$sql);
?>

<!-- Sign 2 -->
<form action="insert.php" method="post">
    Book ID: <input type="text" name="id"><br>
    Book Name: <input type="text" name="name"><br>
    Author: <input type="text" name="author"><br>
    Publisher: <input type="text" name="publisher"><br>
    Price: <input type="text" name="price"><br>
    <input type="submit" value="Submit">
</form>

<?php
$sql = "INSERT INTO books VALUES ('$id','$name','$author','$publisher','$price')";
mysqli_query($conn,$sql);
?>

<!-- Sign 3 -->
<?php
$sql = "UPDATE books SET name='$name' WHERE id='$id'";
mysqli_query($conn,$sql);

$sql = "DELETE FROM books WHERE id='$id'";
mysqli_query($conn,$sql);
?>

<!-- <html> 
<body> 

<?php

$con = mysqli_connect("localhost", "root", "", "library");

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

$sql = "UPDATE book 
        SET price = '" . $_POST["price"] . "' 
        WHERE book_id = '" . $_POST["book_id"] . "'";

if (!mysqli_query($con, $sql)) {
    die("Error: " . mysqli_error($con));
} else {
    echo "1 record updated successfully.";
}

mysqli_close($con);
?> -->

</body>
</html>

<!-- Sign 4 -->
<?php
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

/* 
if ($imageFileType == "gif" || $imageFileType == "jpeg") {
    echo "<img src='$target_file' width='300'>";
} */
