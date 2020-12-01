<form action="" method="post" id="form">
    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname"/>
    </div>
    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname"/>
    </div>
    <div class="form-group">
        <label for="date">Date of birthday</label>
        <input type="date" name="date" id="date"/>
    </div>
    <button id="but" class="btn">Add</button>
</form>

<?php

session_start();
require_once './config/connect.php';

$pdo = $_SESSION['pdo'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];

$sth = $pdo->prepare("INSERT INTO users (firstname, lastname, date) 
                        VALUES('$firstname', '$lastname', '$date')");
$sth->execute();

header('Location: /');
exit();



