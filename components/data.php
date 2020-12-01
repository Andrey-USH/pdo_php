<?php
session_start();
require_once './config/connect.php';

$pdo = $_SESSION['pdo'];

$stmt = $pdo->query('SELECT * FROM users');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $stmt->fetch()) {
    ?>
    <div class="user">
        <div class="info"><?php echo $row['id'] ?></div>
        <div class="info"><?php echo $row['firstname'] ?></div>
        <div class="info"><?php echo $row['lastname'] ?></div>
        <div class="info"><?php echo $row['date'] ?></div>
        <button><a href="/components/delete.php">DEL</a></button>
    </div>

    <?php
}
?>

