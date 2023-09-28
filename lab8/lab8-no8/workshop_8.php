<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sendRedirect.php" method="post" enctype="multipart/form-data">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    Name: <input type="text" name="name"><br><br>
    Address: <input type="text" name="address"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    Email: <input type="text" name="email"><br><br>
    Select Image File to Upload:
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>