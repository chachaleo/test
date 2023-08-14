<?php
$db_host = '127.0.0.1';
$db_user = 'chachaleo';
$db_pass = 'M5ZJwKF2F5SqKns';
$db_name = 'impact_assess';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT `col 2` as answer FROM questions LIMIT 1";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row['answer']);
} else {
    echo json_encode("No answer found.");
}

mysqli_close($conn);
?>

