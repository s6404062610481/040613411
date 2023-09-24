<?php include "conection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            text
        }
    </style>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    while ($row = $stmt->fetch()) :
    ?>
    <table border="1">
    <tr>
        <th>รหัสสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>รายละเอียดสินค้า</th> 
        <th>ราคา</th>
    </tr>
    <tr>
        <td><?=$row ["pid"]?></td>
        <td><?=$row ["pname"]?></td>
        <td><?=$row ["pdetail"]?></td>
        <td><?=$row ["price"]?> บาท</td>
    </tr>
    </table>
    
    <?php endwhile; ?>
</body>
</html>