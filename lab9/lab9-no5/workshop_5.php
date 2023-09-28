<?php include "conection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // 1. ก าหนดค าสง
    $stmt = $pdo->prepare("SELECT * FROM product WHERE pid = ?");
    $stmt->bindParam(1, $_GET["username"]); // 2. น าค่า pid ที่สงมากับ ่ URL ก าหนดเป็นเงื่อนไข
    $stmt->execute(); // 3. เริ่มค ้นหา
    $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข ้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
    ?>
</head>
<body>

    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
        ?>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        <a href="detail_no5.php?username=<?=$row ["username"]?>">
        <img src="img/<?=$row ["username"]?>.jpg" alt="">
        </a>
        <br><hr>
    <?php } ?>

</body>
</html>