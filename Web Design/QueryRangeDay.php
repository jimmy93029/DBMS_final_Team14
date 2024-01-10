<?php
    require_once "config.php";
?>

<h3>sql查詢結果</h3>
<?php
$company = $_POST["company"];
$date1 = $_POST["date1"];
$date2 = $_POST["date2"];

$sql = "SELECT * FROM {$company}_daily_table t, Date d WHERE d.Date_Day BETWEEN '$date1' AND '$date2' AND d.Date_id = t.Date_id";
$result = mysqli_query($conn,$sql);

$check1 = "SELECT * FROM Date WHERE Date.Date_day='$date1'";
$c1 = mysqli_query($conn, $check1);
$check2 = "SELECT * FROM Date WHERE Date.Date_day='$date2'";
$c2 = mysqli_query($conn, $check2);
if (mysqli_num_rows($c1)==0 or mysqli_num_rows($c2)==0){
    echo "Date Error";
    return;
}

if ($result) {
    if (mysqli_num_rows($result)>0) {
        $com_id = $result->fetch_object()->Company_id;
        $temp = "SELECT * FROM Company WHERE Company_id = $com_id";
        $com_stock_code = $conn->query($temp)->fetch_object()->Company_stock_code;

        $py_result = shell_exec("python graph.py $com_stock_code $date1 $date2");
        echo "<img src='query_fig.png' alt='Line Graph'>";

        echo "公司{$company}從{$date1}到{$date2}的股價如下";
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