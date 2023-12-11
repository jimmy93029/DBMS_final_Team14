<?php
    require_once "config.php";
?>

<h3>sql查詢結果</h3>
<?php
$company = $_POST["company"];
$date = $_POST["date"];

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
