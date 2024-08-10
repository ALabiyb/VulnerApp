<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS Example</title>
</head>
<body>
    <h1>Welcome, <?php echo $_GET['name']; ?>!</h1>  <!-- Vulnerable to XSS -->
</body>
</html>
