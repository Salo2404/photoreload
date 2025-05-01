<?php
include 'db.php';
$query = "SELECT * FROM photos ORDER BY id DESC";
$result = mysqli_query($connection, $query);
$photos = array();
while ($row = mysqli_fetch_assoc($result)) {
    $photos[] = $row;
}

echo json_encode($photos);
mysqli_close($connection);

//$photo = $_POST['photo']
//$comment = $_POST['comment']
//$stmt = $conn->prepare("INSERT INTO `tasks`(`title`, `description`) VALUES(?,?)")