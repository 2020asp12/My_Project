<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validation (simple)
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill in all fields!');</script>";
    } else {
        // Here you could save the message to a database or send an email
        // For now, let's just simulate sending a response
        echo "<script>alert('Thank you for contacting us! We will get back to you soon.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Women's Security Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact">
        <h1>Contact Us</h1>
        <form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Women's Security Application. All Rights Reserved.</p>
    </footer>
</body>
</html>
