<?php include "conection.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]); 
    $stmt->execute(); 
    $row = $stmt->fetch(); 
?>

    ชื่อสมาชิก: <?=$row ["name"]?><br>
    ที่อยู่: <?=$row ["address"]?><br>
    อีเมล์: <?=$row ["email"]?><br>
    <img src="img/<?=$row ["username"]?>.jpg" alt=""><br><hr>

</body>
</html>