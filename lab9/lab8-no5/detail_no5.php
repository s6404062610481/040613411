<?php include "conection.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]); // 2. น าค่า pid ที่สงมากับ ่ URL ก าหนดเป็นเงื่อนไข
    $stmt->execute(); // 3. เริ่มค ้นหา
    $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข ้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>

    ชื่อสมาชิก: <?=$row ["name"]?><br>
    ที่อยู่: <?=$row ["address"]?><br>
    อีเมล์: <?=$row ["email"]?><br>
    <img src="img/<?=$row ["username"]?>.jpg" alt=""><br><hr>

</body>
</html>