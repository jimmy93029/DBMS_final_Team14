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


$datas = array();
$sql = "SELECT * FROM {$company}_dalit_table WHERE date = $date ";
$result = mysqli_query($conn,$sql);

if ($result) {
    if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    mysqli_free_result($result);
}
else {
    
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}

if(!empty($result)){
    print_r($datas);
}
else {
    

    echo "查無資料";
}
?>
