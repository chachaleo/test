<?php
$db_host = '127.0.0.1';
$db_user = 'chachaleo';
$db_pass = 'M5ZJwKF2F5SqKns';
$db_name = 'impact_assess';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT correct_answer, COUNT(*) as count FROM questions_1 GROUP BY correct_answer";
$result = mysqli_query($conn, $query);

$answers = [];
while ($row = mysqli_fetch_assoc($result)) {
    $answers[$row['correct_answer']] = (int) $row['count'];
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($answers);
?>
