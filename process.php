<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $namn = $_POST["namn"];
    $email = $_POST["email"];
    $meddelande = $_POST["meddelande"];

    // Create a string to save in data.txt
    $file = 'data.txt';
    $data = "Namn: $namn\nE-post: $email\nMeddelande: $meddelande\n\n";

    // Open data.txt in append mode and write the data
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // Optionally, you can redirect the user to a thank you page
    header("Location: tack.html");
    exit();
}
?>
