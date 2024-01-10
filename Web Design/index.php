<<<<<<< HEAD
<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    header("location controller.php");
    exit;
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charest=utf-8">
        <title>登入介面</title>
    </head>
    <body>
        <h1>Log In</h1>
        <h2>股票查詢網站，訪客請點訪客登入，管理員請輸入密碼以更改資料</h2>
    <form method="post" action="login.php">
    密碼：
    <input type="password" name="password"><br><br>
    <input type="submit" value="登入" name="submit"><br><br>
    <a href="select.php">訪客登入</a>
    </form>
    </body>
</html>
=======
<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    header("location controller.php");
    exit;
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charest=utf-8">
        <title>登入介面</title>
    </head>
    <body>
        <h1>Log In</h1>
        <h2>股票查詢網站，訪客請點訪客登入，管理員請輸入密碼以更改資料</h2>
    <form method="post" action="login.php">
    密碼：
    <input type="password" name="password"><br><br>
    <input type="submit" value="登入" name="submit"><br><br>
    <a href="select.php">訪客登入</a>
    </form>
    </body>
</html>
>>>>>>> f6c6e2b5cd3853a415d193db0f870820b5fc5a1b
