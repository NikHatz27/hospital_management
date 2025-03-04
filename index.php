<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCentral</title>
    <link rel="stylesheet" type="text/css" href="assets/index_style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>Welcome to MedCentral</h1>
    </header>
    <main>
        <img src="assets/images/logo.png" alt="MedCentral Logo">
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<p class="error-message">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> MedCentral. All rights reserved.</p>
    </footer>
</div>
</body>
</html>