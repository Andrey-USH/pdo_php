<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
<!--    <script src="../js/jquery-3.5.1.min.js"></script>-->
</head>
<body>
<div class="container">
    <div id="data">
        <div class="users_list">
            <?php
            require_once 'data.php';
            ?>
        </div>
    </div>
    <div class="form">
        <?php
            require_once 'form.php';
        ?>
    </div>
</div>
<script src="../js/index.js"></script>
</body>
</html>
