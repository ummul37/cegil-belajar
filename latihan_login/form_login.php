<?php
session_start();
if(isset($_SESSION['login'])){
    header('location:beranda.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['msg_global'])){
    ?>
        <span style="color: red;">
            <?= $_SESSION['msg_global'] ?>
        </span>
    <?php
    }
    ?>
    <form action="process.php" method="POST">
        <div>
            <label for="">Username</label><br>
            <input type="text" name="username" style="border-color: <?= (isset($_SESSION['msg_user']))?"red":null ?>;"><br>
            <?php
            if(isset($_SESSION['msg_user'])){
            ?>
                <span style="color: red;">
                    <?= $_SESSION['msg_user'] ?>
                </span>
            <?php
            }
            ?>
        </div>

        <div>
            <label for="">Password</label><br>
            <input type="password" name="password" style="border-color: <?= (isset($_SESSION['msg_pass']))?"red":null ?>;"><br>
            <?php
            if(isset($_SESSION['msg_pass'])){
            ?>
                <span style="color: red;">
                    <?= $_SESSION['msg_pass'] ?>
                </span>
            <?php
            }
            ?>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="btn-login">Login</button>
        </div>
    </form>
</body>
</html>

<?php
session_destroy();
?>