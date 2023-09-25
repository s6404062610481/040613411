<?php include "conection.php" ?>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="editDataForm.php" method="post">
    <input type="hidden" name="username" value="<?=$row["username"]?>">
    ชื่อสมาชิก : <input type="text" name="name" value="<?=$row["name"]?>"><br>
    ที่อยู่ : <input type="text" name="address" value="<?=$row["address"]?>"><br>
    อีเมลล์: <input type="text" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขข้อมูล ">
</form>
</body>
</html>