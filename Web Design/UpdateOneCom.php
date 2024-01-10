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

$temp = "SELECT * FROM Date d WHERE d.Date_Day = '$date'";
$result = mysqli_query($conn,$temp);
$date_id = $result->fetch_object()->Date_id;
$check = "SELECT * FROM {$company}_daily_table WHERE Date_id = '$date_id'";
$tmpresult = mysqli_query($conn,$check);

if ($result) {
    if (mysqli_num_rows($tmpresult)>0) {
        $sql = "UPDATE {$company}_daily_table SET Open_Price={$open}, High={$high}, Low={$low}, Close_Price={$close}, Adj_Close={$adj_close}, Volume={$volume} WHERE Date_id={$date_id}";
        $conn->query($sql);
    }
    else{
        $date_num = $date_id;
        if (mysqli_num_rows($result) == 0){
            $sql = "SELECT * FROM Date";
            $result_date = mysqli_query($conn,$sql);
            $date_num = mysqli_num_rows($result_date) + 1;
            mysqli_free_result($result_date);
        }
        $com = "SELECT * FROM {$company}_daily_table";
        $result_com = mysqli_query($conn, $com);
        $company_id = $result_com->fetch_object()->Company_id;
        $sql = "INSERT INTO {$company}_daily_table VALUES ($company_id, $date_id, $open, $high, $low, $close, $adj_close, $volume)";
        $conn->query($sql);
        mysqli_free_result($result_com);
        mysqli_free_result($tmpresult);
    }
    mysqli_free_result($result);
    
    echo "更改完成\n";
}
else {
    
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}

?>