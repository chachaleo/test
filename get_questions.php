<?php
$db_host = '127.0.0.1';
$db_user = 'chachaleo';
$db_pass = 'M5ZJwKF2F5SqKns';
$db_name = 'impact_assess';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT question_text FROM questions_1";
$result = mysqli_query($conn, $query);

$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($questions);
?>
