<?php
// URL of the raw CSV file on GitHub
$csvUrl = 'https://raw.githubusercontent.com/chachaleo/test/basic/data.csv';

// Fetch CSV content
$csvContent = file_get_contents($csvUrl);

// Parse CSV content
$rows = str_getcsv($csvContent, "\n");
$csvData = [];
foreach ($rows as $row) {
    $csvData[] = str_getcsv($row, ",");
}

// Get the first answer
$firstAnswer = isset($csvData[0][1]) ? $csvData[0][1] : "Answer not available";

echo $firstAnswer;
?>

