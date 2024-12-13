<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Women's Security Application</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
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
        <form action="php/contact_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </section>
<br>
    <footer>
        <p>&copy; 2024 Women's Security Application. All Rights Reserved.</p>
    </footer>
</body>
</html>
