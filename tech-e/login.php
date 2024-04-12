<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-E Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="image"></div>
        <div class="form-content">
            <form id="login-form" class="form">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
