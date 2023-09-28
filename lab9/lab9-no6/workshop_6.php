<?php include "conection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
        var ans = confirm("ต้องการลบข้อมูลผู้ใช้ "+ username); // แสดงกล่องถามผู้ใช ้
        if (ans==true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
        document.location = "delete_no6.php?username="+ username ; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
        }
    </script>

</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
        ?>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        ที่อยู่: <?=$row ["address"]?><br>
        อีเมล์: <?=$row ["email"]?><br>
        <img src="img/<?=$row ["username"]?>.jpg" alt=""><br>
        <a href='#' onclick='confirmDelete("<?=$row ["username"]?>")'>ลบ</a><hr>
    <?php } ?> 

</body>
</html>