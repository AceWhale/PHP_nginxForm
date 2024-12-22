<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'] ?? $_COOKIE['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>
<a href="logout.php">Logout</a>
</body>
</html>
