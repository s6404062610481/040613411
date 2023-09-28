<?php include "conection.php" ?>
<?php

$stmt = $pdo->prepare("SELECT username, name, address, email, img FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="editDataForm.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="username" value="<?=$row["username"]?>"><br><br>
    Name: <input type="text" name="name" value="<?=$row["name"]?>"><br><br>
    Address: <input type="text" name="address" value="<?=$row["address"]?>"><br><br>
    Email: <input type="text" name="email" value="<?=$row["email"]?>"><br><br>
    Select Image File to Update:
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Update">
</form>
</body>
</html>