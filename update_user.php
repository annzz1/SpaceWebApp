<?php
session_start();
include("connect.php");

if (!isset($_GET['id'])) {
    echo "No user ID provided!";
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM myusers WHERE Id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found!";
    exit;
}

$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Update User Information</title>
</head>
<header class="header">
        <h1 class="logo">
            <img src="images/moon-no-bg.png" alt="Logo">
            <a href="index.php">SPACE</a>
        </h1>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <?php if(isset($_SESSION['UserName'])): ?>
                <div id="user-profile">
                    <span onclick="toggleUserMenu()">Hello, <?php echo htmlspecialchars($_SESSION['UserName']); ?></span>
                    <div id="user-menu" style="display: none;">
                    <?php if($_SESSION['UserRole'] === 'admin'): ?>
                            <a href="admin.php">Admin</a>
                        <?php endif; ?>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <div id="sign-in"><a href="login.php">Sign In</a></div>
                <div id="sign-up"><a href="registration.php">Sign Up</a></div>
            <?php endif; ?>
        </div>
    </header>
<body>

<div class="update-form">
    <h2>Update User Information</h2>
    <form action="updateuserAction.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['Id']); ?>">
        <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($user['FullName']); ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['UserName']); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['Email']); ?>" required>
        </div>
        <div class="form-group">
            <label for="Role">Role:</label>
            <select name="Role" id="Role" required>
            <option value="">Select Role</option>
            <option value="admin">admin</option>
            <option value="user">user</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div class="form-group">
            <button type="submit">Update</button>
        </div>
    </form>
</div>

</body>
</html>
