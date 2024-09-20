<?php
// index.php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: Frontend/dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Loan App</title>

    <!-- Google Fonts and Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Assets/css/styles.css">

</head>
<body>

<div class="login-container">
    <h2>Login to Loan App</h2>
    <form action="Backend/login.php" method="POST">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?= $error_message ?></div>
        <?php endif; ?>
        <button type="submit">Log In</button>
    </form>
</div>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
</html>
