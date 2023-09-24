<?php include "conection.php" ?>

<?php
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "รหัสสนค้า ิ : " . $row ["pid"] . "<br>";
echo "ชอส
ื่ นค้า ิ : " . $row ["pname"] . "<br>";
echo "รายละเอียดสนค้า ิ : " . $row ["pdetail"] . "<br>";
echo "ราคา: " . $row ["price"] . " บาท <br>";
echo "<hr>\n";
}
?>

?>
