<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vulnerable Web App</title>
</head>
<body>
    <h1>Welcome to the Vulnerable Web Application</h1>
    <p>This web application demonstrates common security vulnerabilities. Explore the examples below:</p>


    <!-- SQL Injection Vulnerability -->
    <h2>SQL Injection Example</h2>
    <form method="POST" action="sqli.php">
        <label for="id">Enter User ID:</label>
        <input type="text" name="id" id="id">
        <input type="submit" value="Submit">
    </form>
    <p>Test the application's susceptibility to SQL injection by entering malicious input.</p>

    <!-- XSS Vulnerability -->
    <h2>Cross-Site Scripting (XSS) Example</h2>
    <form method="GET" action="xss.php">
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>

    <!-- Broken Authentication -->
    <h2>Login (Broken Authentication Example)</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
    <p>Najaribu</p>
</body>
</html>
