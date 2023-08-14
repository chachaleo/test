<?php
$db_host = 'your_db4free_host';
$db_user = 'your_db4free_username';
$db_pass = 'your_db4free_password';
$db_name = 'your_db4free_database_name';

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

