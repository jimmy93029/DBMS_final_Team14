<?php
    require_once "config.php";
?>

<?php
$company = $_POST["company"];
$date = $_POST["date"];
$open = $_POST["open"];
$high = $_POST["high"];
$low = $_POST["low"];
$close = $_POST["close"];
$adj_close = $_POST["adj_close"];
$volume = $_POST["volume"];

$check = "SELECT * FROM Date WHERE Date_day = $date ";
$result = mysqli_query($conn,$check);

$sql = "SELECT * FROM Date";
$result_date = mysqli_query($conn,$sql);
$date_num = mysqli_num_rows($result_date) + 1;

$result_com = mysqli_query($conn,$com);
$com = "SELECT * FROM Company WHERE Company_name = $company ";
$company_id = $result_com->fetch_object();


if ($result) {
    if (mysqli_num_rows($result)>0) {
        $date_id = $result->fetch_object();
        $sql = "UPDATE '".$company."'_daily_table SET Open='".$open."', High='".$high."', Low='".$low."', Close='".$close."', Adj Close='".$adj_close."', Volume='".$volume."' Where Date_id='".$date_id->Date_id."'";
        $conn->query($sql);
    }
    else{
        $sql = "INSERT INTO '".$company."'_daily_table VALUES('".$company_id->Company_id."', '".$date_num."', '".$open."', '".$high."', '".$low."', '".$close."', '".$adj_close."', '".$volume."')";
        $conn->query($sql);
    }
    mysqli_free_result($result);
}
else {
    
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}

?>
<h3>sql更新完成</h3>
<a href="index.php">離開</a>