<?php
    require_once "config.php";
?>

<h3>sql查詢結果</h3>
<?php
$company = $_POST["company"];
$date = $_POST["date"];

$check = "SELECT * FROM Company WHERE Company_name = '$company\r'";
$check_res = mysqli_query($conn,$check);
if (mysqli_num_rows($check_res) == 0){
    echo "<h3>錯誤的公司名稱</h3>";
    return;
}

$sql = "SELECT * FROM {$company}_daily_table t, Date d WHERE d.Date_Day = '$date' AND d.Date_id = t.Date_id";
$result = mysqli_query($conn,$sql);

if ($result) {
    if (mysqli_num_rows($result)>0) {
        $table = '
            <table border=1>
                    <tr>
                         <th>Company</th>
                         <th>Date</th>
                         <th>Open price</th>
                         <th>High price</th>
                         <th>Low price</th>
                         <th>Close price</th>
                         <th>Adj_close price</th>
                         <th>Volume</th>
                    </tr>
            ';
        while ($row = mysqli_fetch_array($result)) {
            $table .= "
            <tr>
                <td>{$company}</td>
                <td>{$row['Date_day']}</td>
                <td>{$row['Open_Price']}</td>
                <td>{$row['High']}</td>
                <td>{$row['Low']}</td>
                <td>{$row['Close_Price']}</td>
                <td>{$row['Adj_Close']}</td>
                <td>{$row['Volume']}</td>
            </tr>
            ";
        }
        $table .= '</table>';
        echo $table;
    }
    else {
    

        echo "查無資料\n";
    }
    mysqli_free_result($result);
}
else {
    
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}
?>
<a href="index.php">離開</a>
