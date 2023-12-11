<?php
    require_once "config.php";
?>
<h3>查詢結果</h3>

<?php
$company = $_POST["company"];
$date = $_POST["date"];
$data = array();
$sql = "SELECT * FROM {$company}_daily_table where 'date' = $date ";
$result = mysqli_query($conn, $sql);
if ($result){
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_free_result($result);
}
else{
    echo "Error: ". mysqli_error($conn);
}
if (!empty($result)) {
    print_r($data);
}
else{
    echo "查無資料";
}
?>