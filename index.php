<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TravelScapes - Discover Maharashtra</title>
</head>
<body>
    <h1>Discover Maharashtra</h1>
    <p>Explore the culture, heritage, and scenic beauty of Maharashtra with TravelScapes!</p>

    <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <a href="signup.php">Sign Up</a> | <a href="signin.php">Sign In</a>
    <?php endif; ?>
</body>
</html>
