<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>
    <form action="guestbook.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Entries:</h2>
    <div>
        <?php
        // Display guestbook entries
        if (file_exists('guestbook.txt')) {
            $entries = file('guestbook.txt');
            foreach ($entries as $entry) {
                echo nl2br(htmlspecialchars($entry));
                echo "<hr>";
            }
        } else {
            echo "No entries yet.";
        }
        ?>
    </div>
</body>
</html>
