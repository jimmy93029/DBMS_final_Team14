<<<<<<< HEAD
<?php
$password=$_POST["password"];
if($password == "111652046" or $password == "11652034" or $password == "111652017"){
    session_start();
    $_SESSION["loggedin"] = true;
    header("location: controller.php");
}
else{
    function_alert("密碼錯誤");
}

function function_alert($msg){
    echo "<script>alert('$msg');
    window.location.href='index.php';
    </script>";
    
    return false;
}
?>
=======
<?php
$password=$_POST["password"];
if($password == "111652046" or $password == "11652034" or $password == "111652017"){
    session_start();
    $_SESSION["loggedin"] = true;
    header("location: controller.php");
}
else{
    function_alert("密碼錯誤");
}

function function_alert($msg){
    echo "<script>alert('$msg');
    window.location.href='index.php';
    </script>";
    
    return false;
}
?>
>>>>>>> f6c6e2b5cd3853a415d193db0f870820b5fc5a1b
