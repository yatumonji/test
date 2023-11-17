<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve latitude and longitude from the POST data
    $latitude= $_POST["latitude"];
    $longitude= $_POST["longitude"];

    // Create or open the CSV file for writing
    $csvFile = fopen('sample.csv', 'w'); // 'w' for write mode, which will overwrite existing content

    // Write the data to the CSV file
    fputcsv($csvFile, array($latitude, $longitude));

    // Close the CSV file
    fclose($csvFile);

    // Optional: Print a success message
    echo "Data successfully saved to CSV!";
}
?>
