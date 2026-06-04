<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts(name, email, message)
            VALUES('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)) {

        echo "
        <html>
        <head>
            <title>Success</title>

            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>

        <body class='bg-dark text-white d-flex justify-content-center align-items-center vh-100'>

            <div class='text-center'>
                <h1>Message Sent Successfully!</h1>

                <a href='index.php' class='btn btn-warning mt-3'>
                    Back Home
                </a>
            </div>

        </body>
        </html>
        ";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>