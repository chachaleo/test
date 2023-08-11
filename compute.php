<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    
    $result = $num1 + $num2;
    
    echo $result;
}
?>
