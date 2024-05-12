<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = isset($message) ? $message: '';

   /* if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }
*/
    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

    mysqli_close($conn);

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>
