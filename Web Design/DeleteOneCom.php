<?php
    require_once "config.php";
?>

<h3>sql查詢結果</h3>
<?php
$company = $_POST["company"];
$date = $_POST["date"];

$sql = "SELECT * FROM Date d WHERE d.Date_Day = '$date'";
$result = mysqli_query($conn,$sql);
$date_id = $result->fetch_object();
if ($result) {
    if (mysqli_num_rows($result)>0) {
        $delete = "DELETE FROM {$company}_daily_table WHERE Date_id = {$date_id->Date_id}";
        $conn->query($delete);
        echo "刪除成功\n";
    }
    else {
    

        echo "查無資料刪除\n";
    }
    mysqli_free_result($result);
}
else {
    
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}
?>
<a href="index.php">離開</a>